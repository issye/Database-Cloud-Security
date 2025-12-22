For @Tasneem
**Database Credentials**:
- Server: localhost (or .\SQLEXPRESS depending on your setup)
- Database Name: vet_clinic
- Username: vet_app_user
- Password: VetSecurePass2026!

**Your Table:**
Use the users table.
- Columns: id, username, password, role.
Note: The password column is wide enough (255 chars) to **store the bcrypt hash you generate in PHP**.
- Default Admin: I inserted a user dr_admin but the password is a placeholder. You may need to manually insert a user with a known hashed password to test your login.

For @Zulaikha

Your Table: Use the pets table

- Insert Form: Connect your "Register Patient" form to these columns:
  1. pet_name (Text)
  2. owner_name (Text)
  3. owner_contact (Text)
  4. treatment_fee (Decimal/Number)
  5. age (Number

  - Delete Function: Use the id column to delete rows.
