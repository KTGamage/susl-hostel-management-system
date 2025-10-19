# 🏢Hostel Management System🍃

A comprehensive web-based Hostel Management System built with Laravel to streamline hostel operations for educational institutions. This platform enables efficient management of student details and hostel accommodations.

## 🌟 Overview

The Hostel Management System is designed to simplify the process of managing student accommodations in educational institutions. The system currently provides robust student details management capabilities for administrators, with room management features planned for future implementation.

### Current Features
- ✅ **Student Details Management** - Complete CRUD operations for student records
- ✅ **Admin Dashboard** - Overview of system operations and student data
- ✅ **Student Registration** - Secure student onboarding process
- ✅ **Search Functionality** - Find and filter student records
- ✅ **Details Verification** - Student information validation system

### Planned Features
- 🔄 **Room Management** - Room allocation and bed management (Coming Soon)
- 🔄 **Attendance System** - Student presence tracking
- 🔄 **Fee Management** - Hostel fee collection and records
- 🔄 **Inventory Management** - Hostel asset tracking

## 🚀 Live Demo

[**View Live Project**](#) <!-- Add your live link here when deployed -->

## 🛠️ Technology Stack

### Backend
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

### Frontend
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

### Database
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

### Tools
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)

## 📋 Prerequisites

Before installing, ensure you have:
- PHP >= 8.0
- Composer
- MySQL Database
- Web Server (Apache/Nginx)

## 🛠️ Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/YOUR_USERNAME/susl-hostel-management-system.git
cd susl-hostel-management-system
```

### Step 2: Install Dependencies
```bash
composer install
```

### Step 3: Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### Step 4: Configure Database
Edit `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hostel_management
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 5: Database Migration
```bash
php artisan migrate
php artisan db:seed
```

### Step 6: Storage Link
```bash
php artisan storage:link
```

### Step 7: Serve Application
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🗂️ Project Structure

```
app/
├── resources
│   ├── css
│   │   │   app.css
│   ├── js
│   │   │   app.js
│   │   │   bootstrap.js
│   ├── lang
│   │   ├── en
│   │   │   │   auth.php
│   │   │   │   pagination.php
│   │   │   │   passwords.php
│   │   │   │   validation.php
│   ├── views
│   │   ├── admin
│   │   │   │   dashboard.blade.php
│   │   ├── auth
│   │   │   │   admin_login.blade.php
│   │   │   contact.blade.php
│   │   │   contact_us.blade.php
│   │   │   details_verified.blade.php
│   │   │   landing.blade.php
│   │   ├── student_details
│   │   │   │   create.blade.php
│   │   │   │   edit.blade.php
│   │   │   │   search.blade.php
├── routes
│   │   api.php
│   │   channels.php
│   │   console.php
│   │   web.php
│   server.php


```

## 👥 User Roles

### Administrators
- Manage student records and profiles
- Verify student details and information
- Search and edit student data
- System configuration and oversight

### Students
- Register through the platform
- Submit personal and academic details
- View their submitted information

## 📝 Usage

### For Administrators
1. Access the admin login page
2. Navigate to the dashboard for system overview
3. Use student management section to:
   - View all student records
   - Search for specific students
   - Edit student information
   - Verify student details

### For Students
1. Visit the landing page
2. Register and submit required details
3. Wait for admin verification

## 🎨 UI/UX Features

- **Responsive Design** - Works on all devices using Bootstrap
- **Modern Interface** - Clean and user-friendly design
- **Hero Sections** - Engaging landing page with visual elements
- **Intuitive Navigation** - Easy-to-use admin panel

## 🔧 Development

### Branch Strategy
- `dev` - Development branch (current default)

### Contributing
1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## 🐛 Troubleshooting

### Common Issues

**Permission Denied Errors**
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

**Composer Dependency Issues**
```bash
composer install --no-dev -o
```

**Migration Errors**
```bash
php artisan migrate:fresh
php artisan db:seed
```
---

**Note:** This is a university group project developed for educational purposes. Built with ❤️ using Laravel and Bootstrap.
