# 📝 Notes App  
A simple PHP-based notes application built to practice core PHP before moving to Laravel.  

## 🚀 Features  
- User authentication  
- Note creation, editing, and deletion  
- Session management  
- Clean URL routing using `.htaccess`  

## 📂 Folder Structure  

- **Core/**: Contains the core logic of the application such as routing, database interactions, and session management.
- **Http/**: Holds the controllers that handle incoming HTTP requests and manage the business logic.
- **Forms/**: (Explain the purpose of this folder in the context of your application, e.g., form validation, processing, etc.)
- **public/**: This is the web root folder. It contains the `index.php`, which serves as the front controller for the application, and the `.htaccess` file to manage routing.

## 🛠 Installation

### 🖥️ On Windows (XAMPP)

1. Download & install XAMPP.

2. Clone this repo inside C:/xampp/htdocs/.

3. Update Apache’s httpd.conf to set DocumentRoot:

DocumentRoot "C:/xampp/htdocs/notes_app/public"
<Directory "C:/xampp/htdocs/notes_app/public">

4. Restart Apache & open http://localhost/ in a browser.

### 🐧 On Linux/macOS

1. Install Apache & PHP (sudo apt install apache2 php for Ubuntu).

2. Clone the repo inside /var/www/html/notes_app/.

3. Update Apache’s virtual host (edit /etc/apache2/sites-available/000-default.conf):

DocumentRoot "/var/www/html/notes_app/public"
<Directory "/var/www/html/notes_app/public">

4. Restart Apache (sudo systemctl restart apache2).

Open http://localhost/ in a browser.

## 🌍 Routing

This app uses .htaccess to handle clean URLs:

* If the requested file exists, it loads normally.

* Otherwise, the request is forwarded to public/index.php.

### Example URLs

* /notes → Shows all notes

* /notes/create → Displays a form to create a note

* /sessions/store → Handles login

## 📜 License

This project is for learning purposes only.