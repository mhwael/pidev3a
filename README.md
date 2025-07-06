# Salutem Medical Center - Appointment Management System

## Project Overview

Salutem Medical Center is a comprehensive **medical appointment management system** built with **Symfony 6.4**. The application provides a complete solution for managing medical appointments with both patient-facing and administrative interfaces, featuring SMS notifications, PDF generation, and modern responsive design.

## 🏥 Key Features

### 📅 **Appointment Management**
- **Patient Booking**: Patients can book appointments online with preferred dates and times
- **Admin Panel**: Complete appointment management interface for medical staff
- **Status Tracking**: Real-time appointment status updates (pending, confirmed, cancelled, completed)
- **Patient Information**: Comprehensive patient data collection including medical history

### 📱 **SMS Notifications** (Twilio Integration)
- **Instant Confirmation**: Automatic SMS sent when appointments are confirmed
- **Cancellation Alerts**: SMS notifications for cancelled appointments
- **Reminder System**: Appointment reminders sent to patients
- **Trial-Optimized**: Short message format compatible with Twilio trial accounts

### 📄 **PDF Generation** (Multiple Engines)
- **KnpSnappyBundle**: Primary PDF generation using wkhtmltopdf
- **DOMPdf Fallback**: Automatic fallback if wkhtmltopdf is unavailable
- **Print-Friendly**: Professional appointment details in PDF format
- **Download Feature**: Direct PDF download from both admin and patient interfaces

### 🎨 **Modern UI/UX**
- **Responsive Design**: Mobile-first approach with professional medical theme
- **Admin Dashboard**: Clean, intuitive interface for medical staff
- **Patient Portal**: User-friendly appointment booking and management
- **Consistent Styling**: Unified design system across all interfaces

### 🔐 **Security & Best Practices**
- **Environment Variables**: Secure credential management
- **Input Validation**: Comprehensive form validation and sanitization
- **Error Handling**: Graceful error handling with user-friendly messages
- **Logging**: Detailed logging for debugging and monitoring

## 🚀 Core Functionality

### Patient Interface
- **Appointment Booking**: Multi-step form with service selection and preferred scheduling
- **My Appointments**: View all personal appointments with status and details
- **PDF Downloads**: Generate and download appointment confirmation PDFs
- **Contact Information**: Complete contact details and location information

### Administrative Interface
- **Dashboard Overview**: Appointment statistics and quick status overview
- **Appointment Management**: 
  - View all appointments with advanced filtering
  - Confirm, cancel, or complete appointments
  - Add cancellation reasons and notes
- **Communication Tools**:
  - Send SMS confirmations and cancellations
  - Email notifications (configurable)
  - Real-time status updates
- **Reporting**: PDF generation for appointment records

## 🛠 Technical Stack

### Backend
- **PHP 8.1+** with **Symfony 6.4**
- **Doctrine ORM** for database management
- **MySQL/MariaDB** database
- **Twig** templating engine

### Integrations
- **Twilio SDK** for SMS messaging
- **KnpSnappyBundle** for PDF generation
- **DOMPdf** as PDF fallback
- **Symfony Mailer** for email notifications

### Frontend
- **Responsive CSS** with custom medical theme
- **JavaScript/jQuery** for interactive elements
- **Font Awesome** icons
- **Mobile-optimized** user interface

## 📱 SMS Features (Twilio)

### Message Types
```
Confirmation: "Appointment Confirmed! [Service] on [Date] at [Time]. Reference: #APT[ID]"
Cancellation: "Appointment Cancelled! [Service] on [Date] at [Time]. Reference: #APT[ID]"
Reminder: "Reminder: [Service] tomorrow [Date] at [Time]. Reference: #APT[ID]"
```

### Configuration
- **Account SID**: Twilio account identifier
- **Auth Token**: Authentication token for API access
- **Messaging Service**: Supports both phone numbers and Messaging Service SIDs
- **Trial-Ready**: Optimized for Twilio trial account limitations

## 🎯 Target Users

### Medical Staff
- **Receptionists**: Manage appointment bookings and confirmations
- **Nurses**: Update appointment statuses and patient information
- **Administrators**: Generate reports and manage system settings
- **Doctors**: View upcoming appointments and patient details

### Patients
- **New Patients**: Easy online appointment booking
- **Existing Patients**: Manage and track appointment history
- **Mobile Users**: Responsive interface for on-the-go access

## 🔧 Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- (Optional) wkhtmltopdf for enhanced PDF generation
- Twilio account for SMS functionality

### Quick Start
1. **Clone and Setup**:
   ```bash
   composer install
   cp .env.example .env
   ```

2. **Configure Environment**:
   ```bash
   # Database
   DATABASE_URL="mysql://user:pass@127.0.0.1:3306/salutem_medical"
   
   # Twilio SMS
   TWILIO_ACCOUNT_SID=your_account_sid
   TWILIO_AUTH_TOKEN=your_auth_token
   TWILIO_PHONE_NUMBER=your_twilio_number
   ```

3. **Initialize Database**:
   ```bash
   php bin/console doctrine:migrations:migrate
   php bin/console doctrine:fixtures:load
   ```

4. **Start Development Server**:
   ```bash
   symfony serve
   # or
   php -S localhost:8000 -t public
   ```

## 📊 Database Schema

### Core Entities
- **Appointment**: Main appointment entity with patient details, scheduling, and status
- **Service**: Medical services offered (consultations, procedures, etc.)
- **Patient Information**: Extended patient data including medical history
- **Appointment Status**: Tracking system for appointment lifecycle

### Key Relationships
- Appointments belong to Services
- Services can have multiple Appointments
- Comprehensive audit trail for all appointment changes

## 🎨 UI Components

### Admin Interface
- **Statistics Cards**: Real-time appointment counts by status
- **Data Tables**: Sortable, filterable appointment listings
- **Action Buttons**: Quick confirmation, cancellation, and completion
- **Form Modals**: Inline editing and status updates

### Patient Interface
- **Booking Wizard**: Step-by-step appointment booking process
- **Status Dashboard**: Clear appointment status indicators
- **PDF Generation**: One-click appointment detail downloads
- **Responsive Tables**: Mobile-friendly appointment listings

## 🔮 Future Enhancements

### Planned Features
- **Calendar Integration**: Google Calendar and Outlook sync
- **Advanced Scheduling**: Recurring appointments and availability management
- **Payment Integration**: Online payment processing for services
- **Telemedicine**: Video consultation integration
- **Analytics Dashboard**: Advanced reporting and insights
- **Multi-language Support**: Internationalization for diverse patient base

### Technical Improvements
- **API Development**: REST API for mobile app integration
- **Real-time Updates**: WebSocket integration for live status updates
- **Advanced Security**: Two-factor authentication and role-based permissions
- **Performance Optimization**: Caching and database optimization

## 📞 Support & Documentation

### Configuration Guides
- [Twilio SMS Setup](README-SECURITY.md#twilio-security)
- [PDF Generation Configuration](README-SECURITY.md#production-deployment)
- [Security Best Practices](README-SECURITY.md)

### Development Resources
- [Symfony 6.4 Documentation](https://symfony.com/doc/6.4/)
- [Doctrine ORM Guide](https://www.doctrine-project.org/projects/orm.html)
- [Twilio PHP SDK](https://www.twilio.com/docs/libraries/php)

---

**Salutem Medical Center** - Streamlining healthcare appointment management with modern technology and user-centric design.
