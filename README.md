# 🔐 LLM Code Security Auditor for WordPress

An AI-powered security auditing tool that scans, detects, fixes, and verifies vulnerabilities in WordPress plugins and PHP code.

---

## 🚨 Problem

Many WordPress plugins and custom themes are deployed with hidden vulnerabilities such as:

- SQL Injection
- Cross-Site Scripting (XSS)
- Insecure file handling
- Weak authentication logic

These issues often go undetected until a website is hacked.

---

## ✅ Solution

This tool uses a Large Language Model (LLM) to:

1. Analyze code for security vulnerabilities
2. Suggest secure fixes
3. Verify that fixes resolve the issue

---

## ⚙️ Features

- 🔍 Automated vulnerability detection
- 🛠 AI-generated secure code fixes
- ✅ Verification of applied fixes
- 📄 Security audit reports
- 🧩 Works with WordPress plugins & PHP projects

---

## 🧪 Example (Real Scan)

### Vulnerable Code
```php
$query = "SELECT * FROM users WHERE id = " . $_GET['id'];


## 📁 Project Structure

- /examples → Sample vulnerable and fixed code
- /screenshots → Demo outputs
- /docs → Technical documentation

## ❌ Before — Vulnerable Code (SQL Injection Risk)

<?php
// Vulnerable code: direct user input in SQL query
$id = $_GET['id'];

$query = "SELECT * FROM wp_users WHERE id = $id";
$result = mysqli_query($conn, $query);
?>

## 🛠 Step 1 — Secured with Prepared Statements (PHP Level Fix)
<?php
// Secure version using prepared statements
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM wp_users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
?>

## 🚀 Step 2 — WordPress Best Practice Implementation

<?php
// WordPress standard secure approach
global $wpdb;

// Sanitize input
$id = absint($_GET['id']);

// Prepare query safely
$query = $wpdb->prepare(
    "SELECT * FROM {$wpdb->users} WHERE ID = %d",
    $id
);

// Execute query
$result = $wpdb->get_results($query);
?>


## 📸 Security Agent Dashboard

### 🖥 Interface Overview
![Dashboard](screenshots/dashboard.jpg)

### 🔍 Scan Execution & Results
![Scan Results](screenshots/scan_results1.jpg)
![Scan Results](screenshots/scan_results2.jpg)

### ⚙️ What this shows

- Automated scanning of WordPress plugin files  
- Detection of security vulnerabilities (e.g. SQL Injection)  
- AI-generated remediation suggestions  
- Structured audit output for developers  

This interface demonstrates the real-world workflow of the LLM Security Auditor in action.

This tool is actively used in professional WordPress security audits and vulnerability fixing workflows.
