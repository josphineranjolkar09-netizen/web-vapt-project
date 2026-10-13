# Web Application Security Assessment

## Project Overview

This project focuses on performing a Web Application Vulnerability Assessment and Penetration Testing (VAPT) against a web application hosted in a controlled laboratory environment.

The assessment follows a structured security testing methodology to identify, validate, and document vulnerabilities in the application.

## Objective

The objective of this project is to identify security vulnerabilities in a web application and evaluate their potential impact.

The assessment includes:

* Reconnaissance
* Endpoint discovery
* Authentication testing
* OWASP Top 10 security testing
* Vulnerability validation
* Risk assessment
* Reporting and remediation recommendations

## Lab Environment

### VAPT Machine

* Kali Linux
* IP Address: 192.168.180.132

### Web Server

* Ubuntu Linux
* IP Address: 192.168.180.128
* Apache Web Server
* PHP
* MySQL

### Application

* Web Application: Web VAPT Project
* Database: MySQL
* Database Name: `vapt_db`

## Tools Used

| Tool       | Purpose                                      |
| ---------- | -------------------------------------------- |
| Nmap       | Network and port scanning                    |
| Nikto      | Web server security assessment               |
| Nuclei     | Automated vulnerability detection            |
| Burp Suite | Web application testing and request analysis |

## Assessment Scope

The assessment is limited to the intentionally vulnerable web application hosted on the Ubuntu laboratory server.

Target:

```text
http://192.168.180.128/vapt/
```

Testing is performed only within the authorized local laboratory environment.

## Website Features

The application currently contains:

* Home page
* User registration
* User login
* MySQL database connectivity

## VAPT Methodology

The assessment follows these stages:

### 1. Reconnaissance

Gather information about the target application and its underlying technologies.

### 2. Endpoint Discovery

Identify accessible directories, files, parameters, and application endpoints.

### 3. Authentication Testing

Assess the login and authentication functionality for security weaknesses.

### 4. OWASP Top 10 Testing

Test the application for relevant OWASP Top 10 vulnerabilities, including:

* Injection
* Broken Access Control
* Identification and Authentication Failures
* Security Misconfiguration
* Cross-Site Scripting (XSS)
* Vulnerable and Outdated Components
* Other applicable web application security issues

### 5. Vulnerability Validation

Manually validate discovered vulnerabilities and determine whether the findings are genuine or false positives.

### 6. Risk Assessment

Document the severity, impact, affected component, evidence, and CVSS score for confirmed vulnerabilities.

### 7. Reporting

Prepare a professional VAPT report containing:

* Vulnerability description
* Affected endpoint
* Evidence
* Impact
* Severity
* CVSS
* Remediation recommendation
* Retesting results

## Project Workflow

```text
Reconnaissance
      ↓
Endpoint Discovery
      ↓
Authentication Testing
      ↓
OWASP Top 10 Testing
      ↓
Vulnerability Identification
      ↓
Manual Validation
      ↓
Evidence Collection
      ↓
Risk / CVSS Assessment
      ↓
Remediation
      ↓
Retesting
      ↓
Final VAPT Report
```

## Project Structure

```text
web-vapt-project/
│
├── README.md
│
├── website/
│   ├── index.php
│   ├── login.php
│   └── register.php
│
├── database/
│   └── database.sql
│
├── vapt/
│   ├── reconnaissance.md
│   ├── endpoint-discovery.md
│   ├── authentication-testing.md
│   └── vulnerability-assessment.md
│
├── evidence/
│   ├── nmap/
│   ├── nikto/
│   ├── nuclei/
│   ├── burp/
│   └── screenshots/
│
├── report/
│   └── Web-VAPT-Report.pdf
│
└── docs/
    ├── architecture.png
    └── workflow.png
```

## Expected Deliverables

The final project will include:

1. Working web application
2. Reconnaissance results
3. Endpoint discovery results
4. Authentication testing results
5. OWASP Top 10 testing results
6. Vulnerability evidence
7. CVSS risk assessment
8. Remediation recommendations
9. Retesting results
10. Final VAPT report
11. Project documentation



## OWASP Top 10 Coverage

This project contains practical demonstrations of selected web application security risks, including vulnerable examples and corresponding mitigations where implemented.

* **A01 — Broken Access Control:** IDOR vulnerable and fixed demonstrations.
* **A02 — Cryptographic Failures:** Vulnerable and fixed cryptographic handling demonstrations.
* **A03 — Injection:** SQL injection testing and secure login handling.
* **A04 — Insecure Design:** Discount validation vulnerable and fixed demonstrations.
* **A05 — Security Misconfiguration:** Security headers and configuration checks.
* **A06 — Vulnerable and Outdated Components:** Reconnaissance and component/version scanning; document specific findings and evidence where available.
* **A07 — Identification and Authentication Failures:** Login, session management, and logout testing.
* **A08 — Software and Data Integrity Failures:** SHA-256 file integrity verification.
* **A09 — Security Logging and Monitoring Failures:** Failed-login event logging demonstration.
* **A10 — Server-Side Request Forgery (SSRF):** Vulnerable URL fetching and allowlist-based mitigation.

**Scope note:** These are educational lab demonstrations, not a claim that every possible vulnerability in each category has been exhaustively tested. Refer to the evidence and assessment report for the tests actually performed and their results.





## Disclaimer

This project is developed for educational and authorized security testing purposes in a controlled laboratory environment.

Security testing must only be performed against systems for which proper authorization has been obtained.
