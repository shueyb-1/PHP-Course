# Web Application Development: PHP & MySQL

Course notes and examples for building dynamic websites and web applications with **PHP** and **MySQL**.

## Chapter 1: Introduction to PHP & MySQL

### Table of Contents
- [Course Overview](#course-overview)
- [Course Objectives](#course-objectives)
- [HTTP and HTML](#http-and-html)
- [Request/Response Procedure](#requestresponse-procedure)
- [What is PHP?](#what-is-php)
- [What Can PHP Do?](#what-can-php-do)
- [Key PHP Features](#key-php-features)
- [Prerequisites](#prerequisites)
- [Requirements](#requirements)
- [Setting Up a Development Server](#setting-up-a-development-server)
- [Testing the Installation](#testing-the-installation)
- [Your First PHP Page](#your-first-php-page)
- [Code Editors](#code-editors)
- [References](#references)

---

## Course Overview

Learn to create dynamic websites and applications.

**Technologies**
- HTML
- PHP
- MySQL
- JavaScript & jQuery
- CSS

**Textbook:** *Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5* (6th Edition), Robin Nixon

PHP (Hypertext Preprocessor) is a powerful tool for developing dynamic and interactive web pages. It is a widely used, free, and efficient alternative to competitors such as Microsoft's ASP.

## Course Objectives

- Understand web application development using PHP and MySQL
- Develop dynamic and interactive web applications with PHP
- Apply fundamental PHP programming concepts
- Develop and validate web forms
- Use jQuery, AJAX, and JSON for interactive applications
- Design databases and perform SQL operations using MySQL
- Develop secure PHP and MySQL CRUD applications
- Develop and consume RESTful APIs using PHP and JSON
- Implement sessions, authentication, authorization, and basic security
- Apply MVC and modern PHP application practices
- Apply fundamental Laravel concepts
- Design, develop, test, and present a complete PHP and MySQL web application

## HTTP and HTML

- **HTTP** is the communication standard that governs requests and responses between the browser and the web server.
- **HTML** is the standard markup language for documents displayed in a web browser.
- **Server:** accepts a request from the client and replies to it in a meaningful way (e.g. sending the requested web page).
- **Client:** the computer (or web browser) that generates the request for service.
- Devices between client and server (routers, proxies, gateways) make sure requests and responses are transferred correctly.

## Request/Response Procedure

1. The web browser asks the web server to send a web page.
2. The web server sends the page back.
3. The browser displays the page.

```
Browser (Client)  ── HTTP Request ──▶  Web Server (Apache + PHP)
                                              │
                                              ▼
                                        PHP runs, may query MySQL
                                              │
Browser (Client)  ◀── HTML Response ──────────┘
```

## What is PHP?

- PHP is an **HTML-embedded scripting language**. Much of its syntax is borrowed from C and Java, plus a few PHP-specific features.
- It is a **server-side** scripting language for making dynamic and interactive web pages.
- When someone visits a PHP page, the web server processes the PHP code, decides what to show (content, pictures), hides the rest (file operations, calculations), translates the result into HTML, and sends it to the visitor's browser.

## What Can PHP Do?

- Reduce the time needed to create large websites
- Create a customized user experience based on information gathered from visitors
- Open up thousands of possibilities for online tools
- Build shopping carts for e-commerce websites
- Collect form data and generate dynamic page content (like any CGI program, and more)
- Run on all major operating systems and work with most web servers
- Use procedural programming, object-oriented programming, or a mixture of both
- Connect to a wide range of databases: MySQL, Oracle, SQL Server

## Key PHP Features

- Server-side execution
- Database connectivity
- Procedural and object-oriented programming
- Form processing
- Session and cookie management
- File handling
- Error handling
- API development
- Framework support, including Laravel

## Prerequisites

Before starting, you should have a basic understanding of:
- **HTML**: syntax, especially HTML forms
- **Basic programming** knowledge

## Requirements

- **Server stack:** Windows, Apache (web server), MySQL (database), PHP (language)
- **Text editor:** Notepad, VS Code, Sublime Text, etc.
- **Web browser:** Chrome, Edge, Opera, Firefox, etc.
- **Git & GitHub** for version control

### Popular PHP Platforms
Social media, e-commerce, blogs/CMS, search engines, knowledge bases, e-learning, entertainment.

## Setting Up a Development Server

### XAMPP

XAMPP = **Apache, MySQL, PHP, Perl**. It creates a local "sandbox" where you can write, deploy, and test code.

| Stack | Platform |
|-------|----------|
| LAMP  | Linux |
| WAMP  | Windows |
| MAMP  | macOS |
| XAMPP | Cross-platform |

- HTML displays without a server; other web languages (like PHP) need one.
- Download XAMPP for free: https://apachefriends.org/download.html
- If you are developing database-integrated applications, **start MySQL** in the XAMPP control panel too.

### Common Problem: VMware

The VMware Authorization Service can use one of Apache's ports (443).
Fix: open **Services**, find *VMware Authorization Service*, right-click, and **Stop**.

## Testing the Installation

1. Start the Apache server in XAMPP.
2. Open your browser and go to `localhost` or `127.0.0.1`.

### Port Already in Use?

Apache's default port is **80**. Another application (e.g. Skype) may already be using it. In that case:

1. Change the Apache port (e.g. to `8080`) and restart.
2. Add the port to the URL: `localhost:8080/example.php`

### Document Root

The document root is the folder served when you visit `http://localhost`.
Default for XAMPP: `C:/xampp/htdocs`

Note that `htdocs` does not appear in the URL. For example, `C:/xampp/htdocs/test/test.html` is opened at `localhost/test/test.html`.

## Your First PHP Page

Save this as `index.php` in `C:/xampp/htdocs/test/`:

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    Hello world!!!
    <?php
        echo ("Welcome to PHP & MYSQL Course");
    ?>
</body>
</html>
```

Open it at: `http://localhost/test/`

`index.php` is the default page that loads automatically, so you don't need to type it in the URL.

## Code Editors

Good editors include Notepad++, Sublime Text, Editra, phpDesigner, and Visual Studio Code. IDEs add IntelliSense, in-editor debugging, autocompletion, and syntax highlighting.

**This course uses Visual Studio Code.**

## References

- Lecturer's notes
- *PHP Manual*, Stig Sæther Bakken
- [W3Schools](http://www.w3schools.com) and [TutorialsPoint](http://www.tutorialspoint.com)
- [php.net](http://www.php.net)
- *Learning PHP, MySQL, JavaScript, CSS & HTML5* (6th ed.), Robin Nixon
- *PHP and MySQL for Dynamic Web Sites*, Larry Ullman
