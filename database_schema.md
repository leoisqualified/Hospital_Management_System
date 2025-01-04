# This is the Database Schema for the Hospital Management System

- You will need to install MySQL on your local machine.

- Open your terminal and type the following command to initiate the MySQL Server.

```bash
write the mysql command here
```

- In MySQL run the following command to create the database

```bash
CREATE DATABASE HMS;
```


# Database Schema 
- Our database will have a users table where users can register credentials into the system. The users table will have four categories of uses: Patients, Doctors, Nurses and the Admin.

- To create the users table run the following command in the MySQL Server or on a dedicated SQL workbench that has been connected to the HMS database.

```bash
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','doctor', 'nurse', 'patient') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```