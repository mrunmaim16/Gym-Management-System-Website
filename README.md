ReadMe File - Maverick Activity Center Website
Overview
The Maverick Activity Center Website is a dynamic web application developed using HTML, CSS,
JavaScript, PHP, and MySQL. This platform provides a comprehensive set of features catering to
both administrators and members.
Features
Admin Authentication
- Admins can securely log in with a valid email and password.
User (Member) Authentication
- Members can log in securely using a valid email and password.
Admin Panel
- The admin panel is accessible only to admin users and contains features for managing members,
marking attendance, and more.
Member Management
- Admins can add, edit, or delete members securely.
Attendance Tracking
- Admins have the ability to mark attendance (absent or present) for any user and view the
percentage of attendance.
Workout List and BMI Calculator for Members
- Members, when logged in, can access a screen for viewing workout lists and have the option to
calculate BMI.
Technologies Used
- HTML
- CSS
- JavaScript
- PHP
- MySQL



Development Environment
- XAMPP 5.5 is used as the local server environment.
Setup Instructions
Database Configuration:
- Import the SQL file (`table.sql`) into your MySQL database using phpMyAdmin.
- Open phpMyAdmin, create a new database, and select it.
- Choose the "Import" option and select the `table.sql` file.
Run the Application:
- Start your XAMPP server.
- Open the project folder in your browser (`http://localhost/[folder name]`).
SQL Database Setup
- The SQL file `table.sql` contains the necessary table structures for your MySQL database. Import
this file using phpMyAdmin to set up the required tables for the Maverick Activity Center website.
