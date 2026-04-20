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
