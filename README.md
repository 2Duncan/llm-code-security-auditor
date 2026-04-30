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


This tool is actively used in professional WordPress security audits and vulnerability fixing workflows.
