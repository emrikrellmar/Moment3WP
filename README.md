# Web Server Programming 1 - Login System

This project is part of the **"Web Server Programming 1"** course and consists of a simple multi-page website with a login system.
The main focus is to create a website where users can log in to access specific pages and features. The project is built with **PHP**.

## Features

* **Login System**: Users can log in using a valid username and password (`admin`, `12345`). Once logged in, they gain access to special pages and content that are otherwise hidden.
* **Session Management**: PHP's `$_SESSION` is used to store the user's login status, allowing the site to display different content depending on whether the user is logged in or not.

## Login Functionality

The login system is the core of the project and consists of the following components:

1. **Login Form**:

   * The user is greeted with a simple form where they can enter their username and password.
   * Two different user accounts can be used to log in:

   **User: emrik**

   * **Username:** `emrik`
   * **Password:** `54321`

   **User: admin**

   * **Username:** `admin`
   * **Password:** `12345`

2. **Session-Based Authentication**:

   * When a user attempts to log in, their credentials are validated using basic PHP logic.
   * If the login details are correct, the session is set using:

     ```php
     $_SESSION['inLoggad'] = true;
     ```

     This grants access to protected content and pages.

## Website Structure

* `index.php`: The main file for including different pages and handling menu navigation.

### **Pages (pages/)**:

* `pages/blogg.php`: Displays a blog section where logged-in users can read posts.
* `pages/bilder.php`: Shows an image gallery for logged-in users.
* `pages/kontakt.php`: Contains a contact form where logged-in users can send messages.

### **Includes (inc/)**:

* `inc/header.php`: Reusable header for a consistent layout.
* `inc/footer.php`: Reusable footer for a consistent layout.
* `inc/meny.php`: Navigation menu linking to different parts of the website.
* `inc/login.php`: Login component, reusable and includes the **logout button**.
* `inc/logout.php`: Contains only the backend logic for logging out.

---
