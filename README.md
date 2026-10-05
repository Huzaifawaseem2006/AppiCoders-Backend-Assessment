# AppiCoders Backend Development Intern Assessment

This repository contains my solution for the AppiCoders Backend Development Intern technical assessment.

## Repository Structure

```text
AppiCoders-Backend-Assessment/
├── Backend_Fundamentals/
│   └── Answers.md
├── Database_Task/
│   └── SQLQuery1.sql
├── Debugging/
│   └── debugging.md
├── laravel-api/
│   └── Laravel REST API
└── programming/
    ├── Program.cs
    ├── DupicateValues.cs
    ├── ReverseString.cs
    ├── LargestNumber.cs
    ├── Explanation.txt
    └── programming.csproj
```

## Tasks

### Programming & Logical Thinking

Contains C# solutions for:

* Finding duplicate values in an array
* Reversing a string without using a built-in reverse function
* Finding the largest number in an array
* Time complexity explanation

### Backend Fundamentals

Contains answers covering backend development, APIs, REST APIs, HTTP methods, authentication, authorization, and JSON.

### REST API

The `laravel-api` folder contains a Laravel REST API for user management with:

* Create user
* Get all users
* Get user by ID
* Update user
* Delete user
* Request validation
* Password hashing
* JSON responses
* HTTP status codes
* Error handling
* Database persistence

**Database:** SQLite

### Database & SQL

Contains SQL Server queries for:

* Creating Users and Posts tables
* One-to-many relationship
* Sample data
* JOIN queries
* Filtering posts by user
* Unique email constraint

**Database:** SQL Server

### Debugging

Contains the debugging solution for safely handling a user ID that does not exist in an array.

## Running the C# Solutions

Navigate to the programming directory:

```bash
cd programming
```

Run the project:

```bash
dotnet run
```

## Running the Laravel API

Navigate to the Laravel API directory:

```bash
cd laravel-api
```

Install dependencies:

```bash
composer install
```

Create the environment file:

```bash
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure the database connection in `.env`, then run the migrations:

```bash
php artisan migrate
```

Start the Laravel development server:

```bash
php artisan serve
```

The API can then be accessed through the local server URL provided by Laravel.

## Technologies Used

* C#
* .NET
* PHP
* Laravel
* SQLite
* SQL Server
* REST APIs
* Git & GitHub
* Postman
