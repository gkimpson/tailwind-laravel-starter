# Laravel 12 + Tailwind CSS + Flowbite Starter Project

## Project Overview

This is a comprehensive starter project for Laravel 12 with Tailwind CSS v4 and Flowbite UI components. It's designed to provide a solid foundation for web applications with modern front-end technologies. The project includes a full suite of UI components from Flowbite, styled with Tailwind CSS, and built on Laravel's robust backend framework.

Key technologies:
- Laravel 12 framework
- Tailwind CSS v4 (with @tailwindcss/vite plugin)
- Flowbite UI components
- Livewire Flux for interactive components
- Vite for asset building
- Laravel Pint for code formatting

## Project Structure

The project follows Laravel's standard directory structure with the addition of UI components:

- `app/` - Main application logic (controllers, models, services)
- `resources/css/app.css` - Main CSS file with Tailwind and Flowbite imports
- `resources/js/app.js` - Main JavaScript file with Flowbite initialization
- `resources/views/` - Contains all Blade templates, organized by component type
- `routes/web.php` - Defines all web routes for the application
- `vite.config.js` - Vite configuration for asset compilation

## Building and Running

### Prerequisites
- PHP 8.2+
- Composer
- Node.js

### Installation
1. Install PHP dependencies:
   ```bash
   composer install
   ```

2. Install JavaScript dependencies:
   ```bash
   npm install
   ```

3. Create environment file and generate application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

### Development Commands

- **Start development server**: `composer run dev` - Starts Laravel server, queue, logs, and Vite in parallel
- **Run Vite dev server**: `npm run dev` - Compiles and serves assets with hot reloading
- **Build for production**: `npm run build` - Creates optimized production assets
- **Serve Laravel only**: `php artisan serve` - Starts Laravel development server

### Database Setup

The project uses SQLite by default. The `post-create-project-cmd` script in composer.json automatically creates the database file and runs migrations.

## Key Features

### UI Components
The project includes a comprehensive set of Flowbite components:
- Layout components (sidebar, footer)
- Navigation (navbar, breadcrumb, mega-menu, pagination)
- Form elements (forms, select, toggle, textarea, datepicker, etc.)
- Buttons and interactive elements (buttons, button-group, dropdown, modal, etc.)
- Feedback components (alerts, banner, toast, progress, spinner)
- Utility components (badge, cards, tables, avatar)
- Interactive components (accordion, carousel, collapse, drawer, etc.)
- Indicators (rating, skeleton, kbd)
- Data display (timeline, list-group, description-list)
- Media (image, video, gallery)

### Frontend Configuration

The CSS is configured in `resources/css/app.css` with:
- Tailwind CSS v4 base import
- Flowbite themes and plugins
- Custom theme configuration with Instrument Sans font
- Dark mode support
- Component-specific styling for Flux components

The JavaScript is set up in `resources/js/app.js` to initialize Flowbite components on page load and after Livewire updates.

### Routing

The application defines routes for each component demo page in `routes/web.php`, making it easy to explore and test individual components. It also includes:
- Authentication routes (login, registration, password reset)
- Settings pages with Livewire components
- Dashboard accessible after authentication

### Development Conventions

- Uses Laravel Pint for consistent code formatting
- Follows PSR-4 autoloading standards
- Implements Tailwind CSS utility-first methodology
- Leverages Flowbite's pre-built components
- Uses Vite for modern asset pipeline
- Implements Livewire for reactive components