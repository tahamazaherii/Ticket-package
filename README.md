# Laravel Ticket Package

This is a Laravel package for managing a ticketing system. It provides controllers, models, repositories, views, migrations, and seeders to help integrate a ticketing system into your Laravel application.

## 📌 Features
- Create, list, and reply to tickets.
- Supports database migrations and seeding.
- Easy installation and configuration.

---

## 🚀 Installation

###  Install the Package
Run the following command in your Laravel project root:
```bash
composer require tahamazaheri/ticket
```
## After Installation


To install the package, run the following command in your terminal:

```bash
php artisan vendor:publish --tag=Ticket --force
```
And then write this command for migration:
```bash
php artisan make:migration
```
#### (Optional) Seed the Database
```bash
php artisan db:seed
```
