<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laraveltps://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

# Laravel-Vue Login System

A full-stack **Login System** built with **Laravel** (backend) and **Vue.js** (frontend), demonstrating user registration, authentication, and secure password management.

---

## Features

- User registration with validation  
- Secure login/logout with Laravel authentication  
- Password hashing with Laravel’s built-in Hash facade  
- Vue.js SPA frontend with reactive form handling  
- Real-time feedback on login/ forms  
- PostgreSQL database integration (using `testDB`)  
- Clean and modular code structure  
- Ready for extension with roles, permissions, and API endpoints  

---



## Getting Started

### Prerequisites

- PHP >= 8.x  
- Composer  
- Node.js & npm/yarn  
- PostgreSQL  
- Git  

### Installation

1. Clone the repo

```bash
git clone https://github.com/yourusername/laravel-vue-login-system.git
cd laravel-vue-login-system

Install PHP dependencies

bash
Copy
Edit
composer install

Install Node dependencies & build frontend

bash
Copy
Edit
npm install
npm run dev // alternate - .\node_modules\.bin\vite


Set up your environment variables

Copy .env.example to .env

Update DB credentials (e.g., DB_DATABASE=testDB)
php artisan migrate
**Run the development server
php artisan serve


**for registration
--------------------------------------------------------------------------------------------------------------------------------------------------------
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'mahadishanto',
    'email' => 'shanto@gmail.com',
    'password' => Hash::make('password123'),
]);
-----------------------------------------------------------------------------------------------------------------------------------------------------

Project Structure Highlights
/app/Models/User.php — User model with hashed password

/routes/web.php — Routes for auth and frontend views

/resources/js/components — Vue.js components for login & register

/database/migrations — Migration files for users table
## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
