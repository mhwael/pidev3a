<?php

namespace App\Command;

use App\Service\TwilioService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:test-twilio',
    description: 'Test Twilio SMS sending functionality',
)]
class TestTwilioCommand extends Command
{
    public function __construct(private TwilioService $twilioService)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('phone', InputArgument::REQUIRED, 'Phone number to test SMS (with country code, e.g., +1234567890)');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $phone = $input->getArgument('phone');

        $io->title('Testing Twilio SMS Service');
        
        try {
            $io->section('Testing basic SMS sending...');
            $io->note('Phone number: ' . $phone);
            
            $testMessage = "Test message from Salutem Medical Center - " . date('Y-m-d H:i:s');
            $io->note('Message: ' . $testMessage);
            
            $result = $this->twilioService->sendSms($phone, $testMessage);
            
            if ($result) {
                $io->success('✅ SMS sent successfully!');
                
                $io->section('Testing appointment confirmation SMS...');
                
                $appointmentData = [
                    'patientName' => 'Test Patient',
                    'serviceName' => 'Test Service',
                    'date' => 'July 5, 2025',
                    'time' => '10:00 AM',
                    'location' => 'Main Office',
                    'id' => '999'
                ];
                
                $confirmResult = $this->twilioService->sendAppointmentConfirmationSms($phone, $appointmentData);
                
                if ($confirmResult) {
                    $io->success('✅ Appointment confirmation SMS sent successfully!');
                    return Command::SUCCESS;
                } else {
                    $io->error('❌ Appointment confirmation SMS failed');
                    return Command::FAILURE;
                }
            } else {
                $io->error('❌ Basic SMS sending failed');
                return Command::FAILURE;
            }
            
        } catch (\Exception $e) {
            $io->error('❌ Exception occurred: ' . $e->getMessage());
            $io->note('Full error: ' . get_class($e) . ' - ' . $e->getFile() . ':' . $e->getLine());
            return Command::FAILURE;
        }
    }
}
