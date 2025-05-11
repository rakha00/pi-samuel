# Laravel 12 Installation Guide

This guide will help you clone and run a Laravel 12 project.

## Prerequisites

-   PHP 8.3 or higher
-   Composer
-   Git
-   Node.js & NPM
-   MySQL or any supported database

## Installation Steps

Note: Please ensure to start your local server first before proceeding

1. Clone the repository
    > git clone https://github.com/rakha00/pi-samuel.git
2. Install dependencies using Composer
    > composer install
3. Install NPM dependencies
    > npm install
4. Create a .env file and configure your database
    > cp .env.example .env
5. Generate the application key
    > php artisan key:generate
6. Run migrations and seeders
    > php artisan migrate --seed
7. Run the application
    > composer run dev
8. Open your browser and visit . Open your browser and visit
    > http://localhost:8000
