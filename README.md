# Laravel Coding Round Project

This project is a simple Laravel 12 RESTful API that implements:

1. ✅ Blog Post CRUD API  
2. ✅ User Registration API  
3. ✅ Task Management API  

Built with Laravel's built-in features including Eloquent ORM, validation, migrations, and API routing.

---

## 🛠️ Setup Instructions

### 1. Clone the Repository

bash
git clone https://github.com/your-username/laravel-coding-round.git
cd laravel-coding-round


### 2. Install Dependencies

bash
composer install


### 3. Copy `.env` and Generate App Key

bash
cp .env.example .env
php artisan key:generate


### 4. Configure Database

In `.env`, update your DB settings:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=


### 5. Run Migrations

bash
php artisan migrate


### 6. Start the Server

bash
php artisan serve


The server will be available at:
📍 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📮 API Endpoints

### 🔹 User Registration API

**POST** `/api/register`
Registers a new user.

#### Request:

json
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password123"
}


#### Response:

json
{
  "id": 1,
  "name": "Jane Doe",
  "email": "jane@example.com",
  "created_at": "2024-12-18T10:00:00Z"
}

---

### 🔹 Blog Post API

* **POST** `/api/posts` – Create a blog post
* **GET** `/api/posts` – Get all blog posts
* **GET** `/api/posts/{id}` – Get a single post by ID

#### Example Create Post:
json
{
  "title": "My First Post",
  "content": "This is my content."
}


#### Response:

json
{
  "id": 1,
  "title": "My First Post",
  "content": "This is my content.",
  "created_at": "2024-12-18T10:00:00Z"
}


---

### 🔹 Task Management API

* **POST** `/api/tasks` – Create a task
* **PATCH** `/api/tasks/{id}` – Mark task as completed
* **GET** `/api/tasks/pending` – Get all pending tasks

#### Create Task:

json
{
  "title": "Finish Laravel test"
}


#### Mark as Completed:
json
{
  "is_completed": true
}


---

## 📁 Folder Structure


app/
├── Http/
│   └── Controllers/
│       ├── AuthController.php
│       ├── PostController.php
│       └── TaskController.php
├── Models/
│   ├── Post.php
│   ├── Task.php
│   └── User.php
database/
├── migrations/
routes/
└── api.php




## ✅ Requirements

* PHP 8.2+
* Composer
* Laravel 12
* MySQL or compatible database
* Postman or cURL for testing APIs

---

## 🔗 Author

Created for Laravel Coding Round – \[Your Name or GitHub Profile]

```

---

Let me know if you'd like to include example screenshots of Postman requests or sample `.env.example` file too.
```
