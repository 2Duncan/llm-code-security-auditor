# ⚡ CraftyAgent – AI WordPress Security Auditor

An AI-powered security agent that scans, detects, fixes, and verifies vulnerabilities in WordPress plugins and PHP code.

> Designed for real-world WordPress security audits, malware removal, and vulnerability remediation workflows.

---

## 🚀 Key Capabilities

- 🔍 Automated vulnerability detection (OWASP Top 10)
- 🛠 AI-powered remediation suggestions
- ✅ Verification of applied fixes
- 📄 Structured security audit reports
- 🖥 Interactive security dashboard interface

---

## 💼 Use Cases

- WordPress plugin security audits  
- Malware detection & cleanup  
- Pre-deployment code security checks  
- Freelance WordPress security services  

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

## 🧪 Example — Real Security Scan

### ❌ Vulnerable Code (SQL Injection Risk)

```php
<?php
$id = $_GET['id'];

$query = "SELECT * FROM wp_users WHERE id = $id";
$result = mysqli_query($conn, $query);
?>
````

---

### 🛠 Step 1 — Secure PHP Fix (Prepared Statements)

```php
<?php
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM wp_users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
?>
```

---

### 🚀 Step 2 — WordPress Best Practice Implementation

```php
<?php
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
```

---

## 📁 Project Structure

* `/examples` → Sample vulnerable and fixed code
* `/screenshots` → Demo outputs
* `/docs` → Technical documentation

---

## 📸 Security Agent Dashboard

### 🖥 Interface Overview

![Dashboard](screenshots/dashboard.jpg)

### 🔍 Scan Execution & Results

![Scan Results](screenshots/scan_results1.jpg)
![Scan Results](screenshots/scan_results2.jpg)

---

## ⚙️ What This Shows

* Automated scanning of WordPress plugin files
* Detection of vulnerabilities (e.g. SQL Injection)
* AI-generated remediation suggestions
* Structured audit output for developers

---

## 🔚 Summary

This tool demonstrates a real-world AI-powered workflow for WordPress security auditing, combining detection, remediation, and verification.

It is actively used in professional WordPress security audits and vulnerability fixing workflows.

