# 🐦 Chirper — Laravel Learning Project

This repository follows the **"Laravel Learn: Chirper"** tutorial. A hands-on introduction to the Laravel framework. The project walks through the fundamentals of modern Laravel development using **Blade**, **Eloquent**, **Jetstream**, and **Tailwind CSS** to build a simple microblogging platform similar to Twitter.

---

## 🚀 Project Overview

**Chirper** lets users:
- Register and log in securely using **Laravel Jetstream**.
- Post short messages (chirps) visible to all users.
- Edit and delete their own chirps.
- Explore the basics of authentication, routing, controllers, and models.

This project serves as a foundational exercise to understand how Laravel handles:
- MVC structure  
- Database migrations & Eloquent ORM  
- Authentication scaffolding  
- Blade templating & component-based layouts  
- Real-time updates with Laravel Echo (optional)  

---

## 🧠 Learning Objectives

By completing this project, I've learned to:
- Set up a Laravel development environment.
- Work with **artisan commands** and **migrations**.
- Create models, controllers, and routes.
- Use **Blade templates** to build clean, reusable UI components.
- Implement CRUD operations using Eloquent.
- Integrate **Jetstream** for user auth and profile management.

---

## ⚙️ Tech Stack

| Category | Technology |
|-----------|-------------|
| Framework | [Laravel 11](https://laravel.com/) |
| Frontend | [Blade](https://laravel.com/docs/blade) + [Tailwind CSS](https://tailwindcss.com/) |
| Auth | [Laravel Jetstream](https://jetstream.laravel.com/) |
| Database | SQLite (default) or MySQL |
| Runtime | PHP 8.2+ |
| Package Manager | Composer |
| Dev Server | Artisan / Laravel Sail |

---

## 🧩 Installation & Setup

### 1. Clone the repository
```bash
git clone https://github.com/<your-username>/chirper.git
cd chirper
```

### 2. Install dependencies
```bash
composer install
npm install && npm run dev
```

### 3. Create your environment file
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Set up the database
```bash
php artisan migrate
```

### 5. Start the server
```bash
php artisan serve
```

🧑‍💻 Author

Fabiana Lezama
Learning Laravel through hands-on projects.
📍 Laravel Learn: Chirper Tutorial

📜 License

This project is open-source and available under the MIT License.
