# Laravel Docker Setup (Nginx + PHP + MySQL)

Project ini adalah setup Laravel menggunakan Docker dengan stack:

- Nginx
- PHP 8.2 (php-fpm)
- MySQL

## 📦 Requirements

Pastikan sudah install:

- Docker Desktop
- Git

## 📁 Clone Project
- git clone https://github.com/username/laravel-docker.git
- cd laravel-docker
## ⚙️ Setup Project

**1. Jalankan Container**
- docker-compose up -d --build
**2. Install Dependency Laravel**
  
- docker-compose exec app composer install
**3. Copy File Environment**
  
- cp src/.env.example src/.env
**4. Setting Database (.env)**
  
Edit file src/.env:

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel
DB_PASSWORD=laravel
**5. Generate App Key**

- docker-compose exec app php artisan key:generate
**6. Jalankan Migration**
  
- docker-compose exec app php artisan migrate
## 🌐 Akses Aplikasi

Buka di browser:
http://localhost:8080
## 🧪 Testing CRUD

Buka:
http://localhost:8080/posts
