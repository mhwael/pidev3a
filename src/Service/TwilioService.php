<?php

namespace App\Service;

use Twilio\Rest\Client;
use Psr\Log\LoggerInterface;

class TwilioService
{
    private $client;
    private $fromNumber;
    private $logger;
    private $isMessagingService;

    public function __construct(
        string $accountSid,
        string $authToken,
        string $fromNumber,
        LoggerInterface $logger
    ) {
        $this->client = new Client($accountSid, $authToken);
        $this->fromNumber = $fromNumber;
        $this->logger = $logger;
        // Check if fromNumber is a Messaging Service SID (starts with MG)
        $this->isMessagingService = str_starts_with($fromNumber, 'MG');
    }

    public function sendSms(string $to, string $message): bool
    {
        try {
            // Format phone number to ensure it starts with +
            $formattedTo = $this->formatPhoneNumber($to);
            
            $this->logger->info('Attempting to send SMS', [
                'to' => $formattedTo,
                'from' => $this->fromNumber,
                'message_length' => strlen($message),
                'using_messaging_service' => $this->isMessagingService
            ]);
            
            // Prepare message parameters
            $messageParams = ['body' => $message];
            
            if ($this->isMessagingService) {
                // Use Messaging Service SID
                $messageParams['messagingServiceSid'] = $this->fromNumber;
            } else {
                // Use regular phone number
                $messageParams['from'] = $this->fromNumber;
            }
            
            $messageObject = $this->client->messages->create(
                $formattedTo,
                $messageParams
            );

            $this->logger->info('SMS sent successfully', [
                'to' => $formattedTo,
                'from' => $this->fromNumber,
                'message_sid' => $messageObject->sid ?? 'unknown'
            ]);

            return true;
        } catch (\Exception $e) {
            $this->logger->error('Failed to send SMS', [
                'to' => $to,
                'formatted_to' => $this->formatPhoneNumber($to) ?? $to,
                'from' => $this->fromNumber,
                'error' => $e->getMessage(),
                'error_class' => get_class($e)
            ]);

            return false;
        }
    }

    public function sendAppointmentConfirmationSms(string $to, array $appointmentData): bool
    {
        $message = sprintf(
            "Appointment Confirmed! %s on %s at %s. Reference: #APT%s",
            $appointmentData['serviceName'],
            $appointmentData['date'],
            $appointmentData['time'],
            $appointmentData['id']
        );

        return $this->sendSms($to, $message);
    }

    public function sendAppointmentCancellationSms(string $to, array $appointmentData, string $reason = ''): bool
    {
        $message = sprintf(
            "Appointment Cancelled! %s on %s at %s. Reference: #APT%s",
            $appointmentData['serviceName'],
            $appointmentData['date'],
            $appointmentData['time'],
            $appointmentData['id']
        );

        return $this->sendSms($to, $message);
    }

    public function sendAppointmentReminderSms(string $to, array $appointmentData): bool
    {
        $message = sprintf(
            "Reminder: %s tomorrow %s at %s. Reference: #APT%s",
            $appointmentData['serviceName'],
            $appointmentData['date'],
            $appointmentData['time'],
            $appointmentData['id']
        );

        return $this->sendSms($to, $message);
    }

    private function formatPhoneNumber(string $phoneNumber): string
    {
        // Remove all non-numeric characters
        $cleaned = preg_replace('/[^0-9]/', '', $phoneNumber);
        
        // If it starts with 1 and is 11 digits, add +
        if (strlen($cleaned) === 11 && str_starts_with($cleaned, '1')) {
            return '+' . $cleaned;
        }
        
        // If it's 10 digits, assume it's US and add +1
        if (strlen($cleaned) === 10) {
            return '+1' . $cleaned;
        }
        
        // If it already starts with +, return as is
        if (str_starts_with($phoneNumber, '+')) {
            return $phoneNumber;
        }
        
        // Otherwise, return the original (might need manual formatting)
        return $phoneNumber;
    }
}
