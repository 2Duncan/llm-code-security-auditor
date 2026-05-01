# 🔐 WordPress Security Audit Report

## 🧪 Scan Summary

**Tool:** LLM Code Security Auditor  
**Scope:** WordPress Plugin Files  
**Files Scanned:**
- fixed_plugin.php
- vulnerable_plugin.php  

---

## 📂 File 1: vulnerable_plugin.php

### 🚨 Issue: SQL Injection  
**Severity:** Critical  
**Category:** OWASP A03:2021 – Injection  

### ❌ Problem
User input from `$_GET['id']` is directly injected into SQL query without sanitization.

### ⚠️ Risk
- Unauthorized data access  
- Database manipulation  
- Full site compromise  

---

### 🛠 Fix Applied

```php
$stmt = $conn->prepare("SELECT * FROM wp_users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
