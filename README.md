# 🏢 Hostel Management System 🍃

A comprehensive web-based Hostel Management System built with Laravel and Docker to streamline hostel operations for educational institutions. This platform enables efficient management of student details and hostel accommodations with modern containerized deployment.

## 🌟 Overview

The Hostel Management System is designed to simplify the process of managing student accommodations in educational institutions. The system provides robust student details management capabilities for administrators with a modern, containerized architecture.

### ✨ Current Features
- ✅ **Student Details Management** - Complete CRUD operations for student records
- ✅ **Admin Dashboard** - Overview of system operations and student data
- ✅ **Student Registration** - Secure student onboarding process
- ✅ **Search Functionality** - Find and filter student records
- ✅ **Details Verification** - Student information validation system
- ✅ **Docker Containerization** - Easy deployment with Docker
- ✅ **Multi-Environment Setup** - Local development & production ready

### 🔮 Planned Features (Coming Soon)
- 🔄 **Room Management** - Room allocation and bed management 
- 🔄 **Attendance System** - Student presence tracking
- 🔄 **Fee Management** - Hostel fee collection and records
- 🔄 **Inventory Management** - Hostel asset tracking

## 🛠️ Technology Stack

### Backend
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.4-777BB4?style=for-the-badge&logo=php&logoColor=white)

### Frontend
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

### Database
![MySQL](https://img.shields.io/badge/MySQL-8.0-00000F?style=for-the-badge&logo=mysql&logoColor=white)

### Containerization & Deployment
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Docker Compose](https://img.shields.io/badge/Docker_Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Railway](https://img.shields.io/badge/Railway-0B0D0E?style=for-the-badge&logo=railway&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)

### Development Tools
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)

## 📋 Prerequisites

Before running this project, ensure you have:

### For Local Development (Traditional)
- PHP >= 7.4
- Composer >= 2.0
- MySQL >= 8.0
- Web Server (Apache/Nginx)

### For Docker Development (Recommended)
- Docker >= 20.0
- Docker Compose >= 2.0

## 🏃‍♂️ Quick Start (Docker - Recommended)

### Method 1: Using Docker Compose (Easiest)

1. **Clone the repository**
   ```bash
   git clone https://github.com/YOUR_USERNAME/susl-hostel-management-system.git
   cd susl-hostel-management-system
   ```

2. **Start the application**
   ```bash
   docker-compose up --build
   ```

3. **Access the application**
   - Open http://localhost:8000 in your browser
   - Admin login: Access via `/admin/login`

### Method 2: Traditional Local Setup

1. **Clone and setup**
   ```bash
   git clone https://github.com/YOUR_USERNAME/susl-hostel-management-system.git
   cd susl-hostel-management-system
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database in `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hostel_management
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Run migrations and serve**
   ```bash
   php artisan migrate
   php artisan storage:link
   php artisan serve
   ```

## 🐳 Docker Development Guide

### Project Structure for Docker
```
susl-hostel-management-system/
├── Dockerfile              # Production build for Railway
├── Dockerfile.dev          # Development build
├── docker-compose.yml      # Local development setup
├── docker/
│   ├── nginx.conf         # Production nginx config
│   ├── nginx.dev.conf     # Development nginx config
│   ├── supervisord.conf   # Process management
│   └── startup.sh         # Container startup script
├── .env                   # Local development
├── .env.production        # Production environment
└── railway.toml           # Railway deployment config
```

### Available Docker Commands

```bash
# Start development environment
docker-compose up --build

# Start in background
docker-compose up -d

# View logs
docker-compose logs -f

# Stop containers
docker-compose down

# Run artisan commands
docker-compose exec app php artisan route:list

# Rebuild containers
docker-compose build --no-cache
```

### Docker Services
- **app**: PHP-FPM 7.4 with Laravel
- **webserver**: Nginx serving on port 8000
- **db**: MySQL 8.0 database (optional)

## 🚀 Production Deployment

### Deploy to Railway

1. **Connect your GitHub repository to Railway**
2. **Add MySQL database** in Railway dashboard
3. **Set environment variables**:
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=base64:your_generated_key
   DB_CONNECTION=mysql
   DB_HOST=MYSQLHOST
   DB_PORT=MYSQLPORT
   DB_DATABASE=MYSQLDATABASE
   DB_USERNAME=MYSQLUSER
   DB_PASSWORD=MYSQLPASSWORD
   ```

4. **Railway will automatically deploy** using the Dockerfile

### Environment Configuration

#### Local Development (.env)
```env
APP_ENV=local
APP_DEBUG=true
DB_HOST=host.docker.internal  # For Docker to local MySQL
```

#### Production (.env.production)
```env
APP_ENV=production
APP_DEBUG=false
# DB credentials injected by Railway
```

## 👥 User Roles & Access

### Administrators
- **Access**: `/admin/login`
- **Manage** student records and profiles
- **Verify** student details and information
- **Search** and edit student data
- **System** configuration and oversight

### Students
- **Register** through the platform
- **Submit** personal and academic details
- **View** their submitted information

## 📁 Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AdminAuthController.php
│   │   └── StudentDetailController.php
├── Models/
│   └── StudentDetail.php
resources/
├── views/
│   ├── admin/
│   │   └── dashboard.blade.php
│   ├── auth/
│   │   └── admin_login.blade.php
│   ├── student_details/
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── search.blade.php
│   ├── contact_us.blade.php
│   ├── landing.blade.php
│   └── details_verified.blade.php
routes/
└── web.php
```

## 🎨 UI/UX Features

- **Responsive Design** - Mobile-first Bootstrap design
- **Modern Interface** - Clean and intuitive admin panel
- **Hero Sections** - Engaging landing page with visual elements
- **Containerized** - Consistent environment across development and production

## 🔧 Development

### Branch Strategy
- `main` - Production-ready code
- `dev` - Development branch

### Contributing
1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Commit changes: `git commit -m 'Add amazing feature'`
4. Push to branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

## 🐛 Troubleshooting

### Common Issues & Solutions

**Docker Port Conflicts**
```bash
# Check what's using port 8000
netstat -ano | findstr :8000  # Windows
lsof -i :8000                 # Mac/Linux
```

**Database Connection Issues**
```bash
# Test database connection
docker-compose exec db mysql -u root -p

# Reset database
docker-compose exec app php artisan migrate:fresh
```

**Permission Issues**
```bash
# Fix storage permissions
docker-compose exec app chmod -R 775 storage
docker-compose exec app chmod -R 775 bootstrap/cache
```

**Docker Build Issues**
```bash
# Clean build
docker-compose down
docker system prune -a
docker-compose up --build
```

### Health Check Endpoints
- `http://localhost:8000/health` - Application health status
- `http://localhost:8000` - Main application


## 📄 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

---

**Note**: This is a university group project developed for educational purposes. Built with ❤️ using Laravel, Docker, and modern web technologies.

---
*Last Updated: October 2025*  
*Version: 2.0.0 (Dockerized)*
