CREATE DATABASE IF NOT EXISTS one_vision_academy CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE one_vision_academy;

CREATE TABLE IF NOT EXISTS students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 full_name VARCHAR(150) NOT NULL,
 email VARCHAR(150),
 phone VARCHAR(50),
 course VARCHAR(150) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS teachers (
 id INT AUTO_INCREMENT PRIMARY KEY,
 full_name VARCHAR(150) NOT NULL,
 email VARCHAR(150),
 phone VARCHAR(50),
 subject VARCHAR(150) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS applications (
 id INT AUTO_INCREMENT PRIMARY KEY,
 full_name VARCHAR(150) NOT NULL,
 email VARCHAR(150) NOT NULL,
 phone VARCHAR(50) NOT NULL,
 course VARCHAR(150) NOT NULL,
 message TEXT,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS messages (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(150) NOT NULL,
 email VARCHAR(150) NOT NULL,
 subject VARCHAR(200) NOT NULL,
 message TEXT NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS gallery (
 id INT AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(255) NOT NULL,
 description TEXT,
 image VARCHAR(255) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO gallery(title,description,image) VALUES
('Academy Campus','One Vision Academy campus.','images/academy-campus.jpg'),
('Students Learning','Students in a learning environment.','images/students-learning.jpg'),
('Teacher Teaching','Interactive teaching session.','images/teacher-teaching.jpg'),
('Computer Laboratory','Practical technology learning.','images/computer-lab.jpg'),
('Business Analytics','Business and data learning.','images/business-analytics.jpg'),
('Information Technology','Information technology learning.','images/information-technology.jpg');
