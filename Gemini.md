This is a Laravel starter kit using Livewire, Tailwind CSS, and Flowbite.

Key technologies:
- PHP 8.2
- Laravel 12
- Livewire 2.0
- Tailwind CSS 4.0
- Vite

The project is set up with:
- Authentication (login, registration, password reset)
- User settings (profile, password, appearance)
- A variety of UI components from Flowbite
- GitHub Actions for linting (Pint) and running tests (PHPUnit)

To run the project locally, you can use the `composer run dev` command, which will start the PHP server, queue listener, pail, and Vite dev server.

The `routes/web.php` file defines a large number of routes for showcasing various UI components.

The project uses `laravel-vite-plugin` to integrate Vite with Laravel. The Vite configuration (`vite.config.js`) is set up to handle CSS and JS assets, and to refresh the browser when views are changed.

The GitHub workflows in `.github/workflows` are set up to run on pushes and pull requests to the `develop` and `main` branches. The `lint.yml` workflow runs Pint to format the code, and the `tests.yml` workflow runs the PHPUnit tests.