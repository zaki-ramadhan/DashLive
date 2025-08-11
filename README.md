# DashLive

![Laravel](https://img.shields.io/badge/Laravel-12.x-E34F26?logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-3.6-4E5D94?logo=laravel&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Template-F15A24?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-4.x-38B2AC?logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-7.x-646CFF?logo=vite&logoColor=white)

---

**DashLive** is a web-based application for simple user data management—add, read, and delete users—built with Laravel and Livewire for a fast and reactive user experience.

> _This project is a personal learning project, inspired and developed as part of the [WPU Course](https://wpucourse.id)._  
> It demonstrates practical implementation of modern Laravel features and Livewire components.

---

## ✨ Features

- **Add User:** Input new users quickly with responsive forms.
- **View Users:** See the list of users in a dynamic dashboard.
- **Delete User:** Remove users easily and instantly.
- **Livewire-powered UI:** Real-time updates without page reloads.

## 🛠️ Tech Stack

- **Laravel 12.x**  
  Framework for backend logic, routing, and database migrations.
- **Livewire 3.6**  
  Enables reactive, component-driven interfaces directly in Blade views.
- **Blade**  
  Simple templating for clean and maintainable UI.
- **PHP 8.2+**  
  Core language for server-side functionality.
- **TailwindCSS 4.x**  
  Modern utility-first CSS for rapid design.
- **Vite 7.x**  
  Lightning-fast build tool for frontend assets.

## 🚀 Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/zaki-ramadhan-2/DashLive.git
   cd DashLive
   ```
2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```
3. **Configure environment**
   - Copy `.env.example` to `.env` and set up database credentials.
   - Generate the application key:
     ```bash
     php artisan key:generate
     ```
4. **Run migrations**
   ```bash
   php artisan migrate
   ```
5. **Start the server**
   ```bash
   php artisan serve
   ```
6. **View in browser:**  
   Go to [http://localhost:8000](http://localhost:8000).

## 📁 Structure Overview

- `app/Http/Livewire/` — Livewire components for managing users
- `resources/views/` — Blade templates for UI
- `routes/web.php` — Application routes

## 📚 Credits

- Built as part of [WPU Course](https://wpucourse.id) for hands-on Laravel and Livewire practice.

Thank you for checking out DashLive!
