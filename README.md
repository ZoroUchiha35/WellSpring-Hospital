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

- Table 1: patients (for Task 1 - Patient Registration)<br>
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

- Insert sample data for patients table<br>
INSERT INTO patients (first_name, last_name, id_number, gender, diagnosis, drug) VALUES
('John', 'Mwangi', '12345678', 'male', 'Malaria', 'Artemether-Lumefantrine'),
('Mary', 'Wanjiku', '87654321', 'female', 'Hypertension', 'Lisinopril'),
('Peter', 'Odhiambo', '23456789', 'male', 'Diabetes Type 2', 'Metformin'),
('Jane', 'Akinyi', '98765432', 'female', 'Respiratory Infection', 'Amoxicillin'),
('David', 'Kipchoge', '34567890', 'male', 'Malaria', 'Artemether-Lumefantrine'),
('Sarah', 'Achieng', '45678901', 'female', 'Asthma', 'Salbutamol'),
('James', 'Kamau', '56789012', 'male', 'Hypertension', 'Amlodipine'),
('Grace', 'Mwende', '67890123', 'female', 'Malaria', 'Artemether-Lumefantrine'),
('Michael', 'Omondi', '78901234', 'male', 'Pneumonia', 'Amoxicillin'),
('Esther', 'Wambui', '89012345', 'female', 'Diabetes Type 2', 'Metformin');

<br><br>
- Table 2: malaria_registration (for Task 2 - Malaria Research)<br>
CREATE TABLE IF NOT EXISTS malaria_registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    age INT(3) NOT NULL,
    password VARCHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

- Insert sample data for malaria_registration table<br>
INSERT INTO malaria_registration (first_name, second_name, phone_number, gender, age, password) VALUES
('Brian', 'Otieno', '0712345678', 'male', 28, 'password123'),
('Lucy', 'Wanjiru', '0723456789', 'female', 32, 'secure456'),
('Kelvin', 'Kiprono', '0734567890', 'male', 25, 'mypass789'),
('Faith', 'Chepkoech', '0745678901', 'female', 41, 'research123'),
('Timothy', 'Mwololo', '0756789012', 'male', 35, 'malaria2024'),
('Agnes', 'Kavindu', '0767890123', 'female', 29, 'participant1'),
('Samuel', 'Mutua', '0778901234', 'male', 47, 'study2025'),
('Rose', 'Akoth', '0789012345', 'female', 23, 'volunteer99'),
('Patrick', 'Njoroge', '0790123456', 'male', 52, 'research567'),
('Catherine', 'Adhiambo', '0701234567', 'female', 31, 'password789');
