# WellSpring Hospital Management System

<div align="center">

**A Complete Web-Based Healthcare Management Solution**

[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.0-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/License-Proprietary-red?style=flat-square)](LICENSE)

*"Your Health, Our Priority"*

</div>

---

## 📑 Table of Contents

- [Overview](#-overview)
- [Features](#-features)
- [Screenshots](#-screenshots)
- [Technology Stack](#-technology-stack)
- [System Architecture](#-system-architecture)
- [Project Structure](#-project-structure)
- [Installation Guide](#-installation-guide)
- [Database Schema](#-database-schema)
- [Configuration](#-configuration)
- [User Manual](#-user-manual)
- [Security](#-security)
- [Future Enhancements](#-future-enhancements)
- [Contributing](#-contributing)
- [Support](#-support)
- [License](#-license)
- [Acknowledgments](#-acknowledgments)

---

## 📋 Overview

WellSpring Hospital Management System is a robust, web-based healthcare administration platform designed to digitize and streamline hospital operations. Founded in 2022, WellSpring Hospital serves the growing healthcare needs of Nairobi, Kenya, and surrounding regions.

### Mission Statement
To provide accessible, high-quality healthcare services through innovative technology solutions that enhance patient care and operational efficiency.

### Key Objectives
- **Patient-Centric Care**: Streamline patient registration and record management
- **Operational Excellence**: Digitize department and service management
- **Research Advancement**: Support malaria research initiatives through data collection
- **Career Development**: Facilitate recruitment of qualified healthcare professionals
- **Community Health**: Promote health awareness and preventive care

---

## ✨ Features

### Core Modules

| Module | Description | Key Functionalities |
|--------|-------------|---------------------|
| **Patient Registration** | Comprehensive patient intake system | • New patient registration<br>• Diagnosis recording<br>• Prescription tracking<br>• Recent patients dashboard |
| **Department Management** | Dynamic department information pages | • Emergency Medicine<br>• Cardiology<br>• Pediatrics<br>• General Surgery |
| **Services Directory** | Service catalog with pricing | • Dental Care<br>• Maternity Services<br>• Nutrition & Dietetics<br>• Health packages pricing table |
| **Careers Portal** | Job openings management | • Medical Doctor positions<br>• Nursing opportunities<br>• Support staff vacancies<br>• Requirements listing |
| **Malaria Research** | Research participant registration | • Participant enrollment<br>• Information portal<br>• Research education<br>• Data collection |
| **Responsive Navigation** | User-friendly interface | • Dropdown menus<br>• Mobile-responsive design<br>• Consistent header/footer |

### Additional Features

- **Dynamic URL Routing**: Content filtering via GET parameters
- **Database Integration**: MySQL backend with PHP MySQLi
- **Responsive Design**: Bootstrap-powered responsive layouts
- **Visual Consistency**: Unified color scheme and styling
- **Contact Information**: Integrated contact details and visiting hours

---

## 🖼️ Screenshots

### Homepage
- Hero section with hospital branding
- Statistics dashboard (15+ years, 50+ doctors, 200+ beds, 10,000+ patients)
- About section with hospital history
- Specialty departments quick links
- Why Choose Us features section

### Key Pages
| Page | Preview Description |
|------|---------------------|
| Departments | Individual department pages with images and descriptions |
| Services | Service listings with availability hours and pricing table |
| Careers | Job openings filtered by position type with requirements |
| Registration | Patient registration form with recent patients table view |
| Malaria Info | Comprehensive research information with registration CTA |

---

## 🛠️ Technology Stack

### Frontend Technologies
| Technology | Version | Purpose |
|------------|---------|---------|
| HTML5 | - | Semantic structure and markup |
| CSS3 | - | Custom styling and animations |
| Bootstrap | 4.x | Responsive grid system and components |
| JavaScript | ES6 | Client-side interactivity |

### Backend Technologies
| Technology | Version | Purpose |
|------------|---------|---------|
| PHP | 7.4+ | Server-side logic and templating |
| MySQL | 5.7+ | Relational database management |
| Apache | 2.4+ | Web server (via XAMPP/WAMP) |

### Development Environment
- **Recommended Stack**: XAMPP / WAMP / MAMP
- **Database Tool**: phpMyAdmin
- **Browser Support**: Chrome, Firefox, Safari, Edge

---

## 🏗️ System Architecture















# WellSpring Hospital Management System

## 📋 Overview

WellSpring Hospital Management System is a comprehensive web-based healthcare management solution designed to streamline hospital operations, patient management, and service delivery. The system provides an intuitive interface for managing departments, services, patient registrations, and career opportunities.

## 🏥 Features

### Core Functionality
- **Patient Registration System** - Register and manage patient records with diagnosis and prescription tracking
- **Department Management** - View and manage hospital departments (Emergency, Cardiology, Pediatrics, Surgery)
- **Services Directory** - Comprehensive listing of hospital services with pricing information
- **Careers Portal** - Job openings and application management for medical and support staff
- **Malaria Research Registration** - Specialized registration for malaria research participants

### Key Pages
| Page | Description |
|------|-------------|
| `index.php` | Homepage with hospital overview, statistics, and featured services |
| `departments.php` | Department details with dynamic content loading |
| `services.php` | Service listings with availability and pricing tables |
| `careers.php` | Job openings with requirements and descriptions |
| `registration.php` | Patient registration form and recent patients table |
| `malaria_registration.php` | Research participant registration portal |

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, Bootstrap
- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Server**: Apache (XAMPP/WAMP/LAMP recommended)




## SQL CODE

- Create the database<br>
CREATE DATABASE IF NOT EXISTS PatientData;
USE PatientData;

- Table 1: patients (for Task 1 - Patient Registration) <br><br>
CREATE TABLE IF NOT EXISTS patients ( <br>
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, <br>
    first_name VARCHAR(50) NOT NULL, <br>
    last_name VARCHAR(50) NOT NULL, <br>
    id_number VARCHAR(20) NOT NULL, <br>
    gender VARCHAR(10) NOT NULL, <br>
    diagnosis TEXT, <br>
    drug VARCHAR(100), <br>
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP <br>
);

- Insert sample data for patients table <br>
INSERT INTO patients (first_name, last_name, id_number, gender, diagnosis, drug) <br> VALUES
('John', 'Mwangi', '12345678', 'male', 'Malaria', 'Artemether-Lumefantrine'), <br>
('Mary', 'Wanjiku', '87654321', 'female', 'Hypertension', 'Lisinopril'), <br>
('Peter', 'Odhiambo', '23456789', 'male', 'Diabetes Type 2', 'Metformin'), <br>
('Jane', 'Akinyi', '98765432', 'female', 'Respiratory Infection', 'Amoxicillin'), <br>
('David', 'Kipchoge', '34567890', 'male', 'Malaria', 'Artemether-Lumefantrine'), <br>
('Sarah', 'Achieng', '45678901', 'female', 'Asthma', 'Salbutamol'), <br>
('James', 'Kamau', '56789012', 'male', 'Hypertension', 'Amlodipine'), <br>
('Grace', 'Mwende', '67890123', 'female', 'Malaria', 'Artemether-Lumefantrine'), <br>
('Michael', 'Omondi', '78901234', 'male', 'Pneumonia', 'Amoxicillin'), <br>
('Esther', 'Wambui', '89012345', 'female', 'Diabetes Type 2', 'Metformin'); <br>

<br><br>
- Table 2: malaria_registration (for Task 2 - Malaria Research) <br>
CREATE TABLE IF NOT EXISTS malaria_registration ( <br>
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, <br>
    first_name VARCHAR(50) NOT NULL, <br>
    second_name VARCHAR(50) NOT NULL, <br>
    phone_number VARCHAR(15) NOT NULL, <br>
    gender VARCHAR(10) NOT NULL, <br>
    age INT(3) NOT NULL, <br>
    password VARCHAR(255) NOT NULL, <br>
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP <br>
);

- Insert sample data for malaria_registration table <br>
INSERT INTO malaria_registration (first_name, second_name, phone_number, gender, age, password) <br> VALUES
('Brian', 'Otieno', '0712345678', 'male', 28, 'password123'), <br>
('Lucy', 'Wanjiru', '0723456789', 'female', 32, 'secure456'), <br>
('Kelvin', 'Kiprono', '0734567890', 'male', 25, 'mypass789'), <br>
('Faith', 'Chepkoech', '0745678901', 'female', 41, 'research123'), <br>
('Timothy', 'Mwololo', '0756789012', 'male', 35, 'malaria2024'), <br>
('Agnes', 'Kavindu', '0767890123', 'female', 29, 'participant1'), <br>
('Samuel', 'Mutua', '0778901234', 'male', 47, 'study2025'), <br>
('Rose', 'Akoth', '0789012345', 'female', 23, 'volunteer99'), <br>
('Patrick', 'Njoroge', '0790123456', 'male', 52, 'research567'), <br>
('Catherine', 'Adhiambo', '0701234567', 'female', 31, 'password789');
