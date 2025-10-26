# PHP Login System

A simple and secure PHP authentication system with modern gradient UI design. This project provides user registration, login functionality, and session management with MySQL database integration.

![PHP Version](https://img.shields.io/badge/PHP-8.2.12-blue)
![MariaDB](https://img.shields.io/badge/MariaDB-10.4.32-orange)
![Apache](https://img.shields.io/badge/Apache-2.4.58-red)
![License](https://img.shields.io/badge/license-MIT-green)

## ✨ Features

- 🔐 **Secure Authentication** - User login and registration with session management
- 👤 **User Management** - Dashboard with user information display
- 🎨 **Modern UI Design** - Professional gradient interface with responsive layout
- 📱 **Mobile Responsive** - Works seamlessly on all device sizes
- 🗄️ **MySQL Database** - Reliable data storage and management
- 🔒 **Session Security** - Protected routes and secure user sessions

## 📋 Requirements

- PHP >= 8.2
- MariaDB >= 10.4 (or MySQL >= 5.7)
- Apache >= 2.4
- XAMPP 8.2.12 (recommended for local development)
- PHP Extensions: mysqli, curl, mbstring
  
## 🛠️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/galangam/php-login-system.git
cd php-login-system
```

### 2. Database Setup

Create a new MySQL database:

```sql
CREATE DATABASE buku_tamu;
```

Import the database schema:

```sql
USE buku_tamu;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 3. Configure Database Connection

Copy the example configuration file:

```bash
cp service/database.example.php service/database.php
```

Edit `service/database.php` with your database credentials:

```php
<?php
$hostname = "localhost";
$username = "root";
$password = "your_password";
$database_name = "buku_tamu";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "koneksi database rusak";
    die("error!");
}
?>
```

### 4. Start the Application

If using XAMPP:
1. Move the project folder to `htdocs` directory
2. Start Apache and MySQL from XAMPP Control Panel
3. Open browser and navigate to: `http://localhost/php-login-system`

## 📁 Project Structure

```
php-login-system/
├── layout/
│   ├── header.html      # Header component with navigation
│   └── footer.html      # Footer component
├── service/
│   ├── database.php     # Database configuration (ignored)
│   └── database.example.php  # Example database config
├── index.php            # Home page
├── login.php            # Login page
├── register.php         # Registration page
├── dashboard.php        # User dashboard (protected)
├── halo.php            # Welcome page
├── nama.php            # User info page
├── date.php            # Date display page
├── style.css           # Main stylesheet
├── .gitignore          # Git ignore rules
└── README.md           # Documentation
```

## 🎯 Usage

### Registration
1. Navigate to the registration page
2. Fill in username, password, and name
3. Click "Register" button
4. You will be redirected to login page

### Login
1. Enter your username and password
2. Click "Login" button
3. Upon successful login, you'll be redirected to the dashboard

### Dashboard
- View your user information
- Access protected pages
- Logout functionality

## 🔒 Security Features

- Password hashing (recommended to implement `password_hash()`)
- Session-based authentication
- Protected routes with session checks
- SQL injection prevention (use prepared statements)
- XSS protection

## 🎨 Customization

### Changing Colors

Edit `style.css` to customize the gradient colors:

```css
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
```

### Modifying Layout

- Edit `layout/header.html` for navigation changes
- Edit `layout/footer.html` for footer customization

## 📝 To-Do / Future Improvements

- [ ] Implement password hashing with `password_hash()`
- [ ] Add password reset functionality
- [ ] Email verification system
- [ ] User profile editing
- [ ] Remember me functionality
- [ ] Admin panel
- [ ] Input validation improvements
- [ ] Prepared statements for SQL queries
- [ ] CSRF protection

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 👤 Author

**@galangam**

- GitHub: [@galangam](https://github.com/galangam)

## 🙏 Acknowledgments

- Design inspiration from modern web applications
- PHP and MySQL community
- Open source contributors

## 📧 Support

If you have any questions or issues, please open an issue on GitHub or contact me directly.

---

⭐ **Star this repository if you find it helpful!**
