# PawSecure Vet System - Database & Cloud Security Assignment

**Course:** CCS6344 T2530 Database & Cloud Security  
**Assignment:** Assignment 1 - Database Security  
**Group:** Group 01

## 📂 Source Code Location
**Please Note:** The full source code for the PHP application is located in the **`pawsecure`** folder within this repository.

---

## 👥 Group Members
* **AINUL TASNEEM BINTI MOHD NAZROL** (1211108525)
* **ISSYE LAILIYAH BINTI SOPINGI** (1231303279)
* **ZULAIKHA AFZAN BINTI BEE WAN** (1221102418)

## ⚙️ Installation & Run Instructions

Follow these steps to set up the environment and run the **PawSecure** system locally.

### 1. Prerequisites
* **Code Editor:** VS Code (recommended) or any text editor to view the code.
* **Server Environment:** XAMPP (for Apache).
* **Database:** Microsoft SQL Server (SSMS).
* **Drivers:** Microsoft PHP Drivers for SQL Server.

---

### 2. Setting up PHP Drivers for SQL Server
*Crucial Step: If this is not done, you will get a "could not find driver" error.*

1.  **Download Drivers:** Go to the [Microsoft Official Page](https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server) and download the **Microsoft Drivers 5.11+ (or latest)** for PHP for SQL Server.
2.  **Extract:** Unzip the downloaded file.
3.  **Locate DLLs:** Open the folder corresponding to your PHP version (e.g., `php_8.2`). Find and copy these two files:
    * `php_sqlsrv_82_ts_x64.dll`
    * `php_pdo_sqlsrv_82_ts_x64.dll`
4.  **Install DLLs:** Paste both files into your XAMPP extension folder:
    * Path: `C:\xampp\php\ext`
5.  **Configure php.ini:**
    * Open XAMPP Control Panel.
    * Click **Config** next to Apache -> select **PHP (php.ini)**.
    * Scroll to the very bottom of the file and paste these lines:
        ```ini
        extension=php_sqlsrv_82_ts_x64.dll
        extension=php_pdo_sqlsrv_82_ts_x64.dll
        ```
    * Save and close the file.
6.  **Verify:** Start **Apache** in XAMPP (it must turn green). Open `http://localhost/phpinfo.php` in your browser. Scroll down and confirm that `sqlsrv` and `pdo_sqlsrv` are listed.

---

### 3. Database Setup
*Note: This must be executed before running the website.*

1.  Open **SQL Server Management Studio (SSMS)**.
2.  Locate **Issye's SQL Script** provided in the repository.
3.  Run the script to create:
    * Database: `vet_clinic`
    * User: `vet_app_user`

---

### 4. Running the Website

1.  **Deploy Code:**
    * Download the project zip file (`pawsecure`).
    * Extract the folder.
    * Move the `pawsecure` folder into: `C:\xampp\htdocs\`
2.  **Start Server:** Open XAMPP and ensure **Apache** is running (Green).
3.  **Access:** Open your browser and go to:
    * `http://localhost/pawsecure`
---
**Multimedia University**
