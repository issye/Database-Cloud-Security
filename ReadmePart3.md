**Written by: Issye**

**1.**
**Files Affected:**
* `pets_list_vet.php`
* `pets_list_receptionist.php`

### Technical Controls
The application employs a defense-in-depth approach to security, specifically targeting XSS vulnerabilities through the following measures:

- **Output Escaping:** All dynamic data is escaped using `htmlspecialchars()` (with `ENT_QUOTES` and `UTF-8`) before rendering. This ensures malicious tags are displayed as text rather than executed.
- **Centralized Helper:** A dedicated helper function manages escaping across the application to minimize developer error.
- **URL Encoding:** `urlencode()` is applied to all URL parameters to prevent attribute-based XSS.
- **Content Security Policy (CSP):** Implemented `default-src 'self'` to block unauthorized inline and external scripts.
- **Character Encoding:** Enforced `<meta charset="UTF-8">` to prevent encoding-based bypasses.
- **Context-Aware Encoding:** Data is stored raw (unsanitized) in the database. Sanitation occurs only at output to preserve data integrity and prevent double-encoding.

### Security Impact & Cloud Defense
This implementation secures how data is stored, retrieved, and displayed from the database by preventing SQL injection and stored XSS attacks. All database content is treated as untrusted and safely escaped at output, ensuring malicious data cannot be executed even if it exists in the database.
In a cloud environment, these controls support **defense-in-depth** by protecting shared infrastructure from application-level attacks that could lead to session hijacking, data leakage, or lateral movement. Since cloud providers secure the infrastructure but not application logic (Shared Responsibility Model), these measures are essential for maintaining data confidentiality, integrity, and controlled access in cloud-hosted systems.

**2.**
**Files affected:**
* `pet_add_vet.php`
* `pet_add_receptionist.php`

Server-side input validation was added to the pet creation process to ensure that all required fields are present and non-empty before data is inserted into the database. This prevents invalid, empty, or malicious submissions from bypassing client-side checks. Combined with prepared statements, this provides defense-in-depth by validating input at the application layer while protecting the database from unsafe data insertion.
