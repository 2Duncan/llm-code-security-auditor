# Security Scan Report

## File: vulnerable-plugin.php

### Issue: SQL Injection
Severity: Critical

### Description:
User input is directly inserted into SQL query without sanitization.

### Fix:
Replaced raw query with prepared statement.

### Status:
✔ Fixed and Verified
