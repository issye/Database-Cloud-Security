# PawSecure Vet System

## Overview
This repository contains the PawSecure veterinary management system, including updated and fixed code for database connections, user authentication, pet management, and audit logging.

This version includes contributions from Issye, Zulaikha, and myself, with important updates to ensure smooth functionality.

---

## How to Launch

1. **PHP Environment**
   - Make sure you have **XAMPP** installed and running.
   - Place the `pawsecure` folder under `C:\xampp\htdocs\`.
   - Ensure PHP extensions for SQL Server are installed: `sqlsrv` and `pdo_sqlsrv`.

2. **PHP Info**
   - Access `http://localhost/phpinfo.php` to verify PHP configuration.
   - Confirm `sqlsrv` and `pdo_sqlsrv` are listed.

3. **Database**
   - Launch **SQL Server Management Studio (SSMS)**.
   - Create and connect to the `vet_clinic` database.
   - Run `vet_schema.sql` to create tables and initial data.
   - Ensure the login `vet_app_user` exists and is mapped to `vet_clinic` with proper permissions.

4. **Updated DB Connection**
   - All PHP files now use the updated `db_connect.php`:
     ```php
     $conn = new PDO(
         "sqlsrv:Server=localhost\SQLEXPRESS;Database=vet_clinic;TrustServerCertificate=true",
         "vet_app_user",
         "VetSecurePass2026!",
         [
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_EMULATE_PREPARES => false
         ]
     );
     ```

5. **User Authentication**
   - New login, register, and logout PHP files:
     - `login.php`
     - `register.php` (testing only)
     - `logout.php`

6. **Audit Log**
   - Audit logging is now functional for all pet operations (add, edit, delete).
   - Each action records:
     - User ID
     - Action type (e.g., Add Pet, Edit Pet)
     - Details including pet info
   - Fixed issue with user ID not showing in audit logs.

7. **Dashboard Updates**
   - **Vet Dashboard:** fully functional with audit log link.
   - **Receptionist Dashboard:** CSS fixed, aligned with system styling.

8. **Pet Management**
   - Add, Edit, Delete functions updated to log actions automatically.
   - All PHP files now include `session_start()` for audit logging.

8. **Task 5 - Security Focus (Tasneem)**
  - SQL Injection Protection: Demonstrated by testing login page with malicious input (e.g., `' OR 1=1 --`) – system safely rejects attempts.
  - Password Hashing: Passwords stored as hashes in database; cannot be read in plain text.

---

## Notes
- Ensure SQL Server is running and accessible via `localhost\SQLEXPRESS`.
- Use XAMPP Apache server for PHP execution.

---

## Contributors
- Issye (original structure)
- Zulaikha (original dashboard and PHP logic)
- Tasneem (updates: db_connect, audit log, login/register/logout, CSS fixes, and pet operation audit alignment)
