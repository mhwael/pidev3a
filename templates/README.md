# Template Structure Documentation

## Overview
This document describes the template organization for the Salutem Medical Center Symfony application.

## Template Structure

```
templates/
├── base.html.twig                 # Main base template for public pages
├── admin/
│   ├── base.html.twig            # Admin dashboard base template
│   ├── appointment/              # Appointment management templates
│   │   ├── index.html.twig       # Appointments list with filtering
│   │   └── show.html.twig        # Appointment details and actions
│   ├── categorie/                # Category management templates
│   │   ├── index.html.twig       # Categories list
│   │   ├── new.html.twig         # Create new category
│   │   ├── edit.html.twig        # Edit category
│   │   └── show.html.twig        # Category details
│   └── service/                  # Service management templates (Admin)
│       ├── index.html.twig       # Services admin list
│       ├── new.html.twig         # Create new service
│       ├── edit.html.twig        # Edit service
│       └── show.html.twig        # Service admin details
├── appointment/                  # Public appointment templates
│   ├── book.html.twig           # Appointment booking form
│   ├── confirmation.html.twig   # Booking confirmation page
│   ├── list.html.twig           # User's appointment list
│   └── show.html.twig           # Appointment details for user
├── emails/                       # Email templates
│   ├── appointment_booked.html.twig      # New appointment notification
│   ├── appointment_confirmed.html.twig   # Appointment confirmation email
│   ├── appointment_cancelled.html.twig   # Appointment cancellation email
│   └── contact.html.twig         # Contact form email template
├── home/                         # Public page templates
│   ├── index.html.twig           # Homepage
│   ├── services.html.twig        # Services list page
│   ├── physicians.html.twig      # Physicians page
│   ├── patient_info.html.twig    # Patient information
│   ├── blog.html.twig            # Blog page
│   └── contacts.html.twig        # Contact form page
└── service/                      # Public service templates
    ├── index.html.twig           # Public services list
    └── show.html.twig            # Public service details
```

## Template Inheritance

### Public Pages
All public-facing pages extend `base.html.twig`:
- Uses public styling
- Includes main navigation
- Contains contact information in footer

### Admin Pages
All admin pages extend `admin/base.html.twig`:
- Uses admin-specific styling (admin.css)
- Includes admin navigation
- Contains admin footer

## Styling

### CSS Files
- `public/css/style.css` - Main public website styles
- `public/css/admin.css` - Admin dashboard styles (clean, modern)
- `public/font/font-awesome.css` - Icon fonts

### Guidelines
- Admin templates use clean, modern CSS with gradients and cards
- Public templates maintain the original medical center design
- All templates are responsive and mobile-friendly

## Best Practices

1. **Consistent Naming**: Use descriptive template names
2. **Template Inheritance**: Always extend appropriate base template
3. **Block Structure**: Use consistent block names across templates
4. **CSS Organization**: Keep admin and public styles separate
5. **Responsive Design**: Ensure all templates work on mobile devices

## Routes Mapping

### Public Routes
- `/` → `home/index.html.twig`
- `/services` → `service/index.html.twig`
- `/services/{id}` → `service/show.html.twig`
- `/contacts` → `home/contacts.html.twig`
- `/physicians` → `home/physicians.html.twig`
- `/patient-info` → `home/patient_info.html.twig`
- `/blog` → `home/blog.html.twig`
- `/appointment/book` → `appointment/book.html.twig`
- `/appointment/confirmation` → `appointment/confirmation.html.twig`
- `/appointment/list` → `appointment/list.html.twig`
- `/appointment/{id}` → `appointment/show.html.twig`

### Admin Routes
- `/admin/appointments` → `admin/appointment/index.html.twig`
- `/admin/appointments/{id}` → `admin/appointment/show.html.twig`
- `/admin/appointments/{id}/confirm` → Confirm appointment (POST)
- `/admin/appointments/{id}/cancel` → Cancel appointment (POST)
- `/admin/appointments/{id}/complete` → Mark as completed (POST)
- `/admin/categories` → `admin/categorie/index.html.twig`
- `/admin/categories/new` → `admin/categorie/new.html.twig`
- `/admin/categories/{id}/edit` → `admin/categorie/edit.html.twig`
- `/admin/services` → `admin/service/index.html.twig`
- `/admin/services/new` → `admin/service/new.html.twig`
- `/admin/services/{id}/edit` → `admin/service/edit.html.twig`

### Appointment Routes
- `/appointments/book/{serviceId}` → `appointment/book.html.twig`
- `/appointments/confirmation/{id}` → `appointment/confirmation.html.twig`
- `/appointments` → `appointment/list.html.twig`
- `/appointments/{id}` → `appointment/show.html.twig`
