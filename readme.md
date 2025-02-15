# 📝 Notes App  
A simple PHP-based notes application built to practice core PHP before moving to Laravel.  

## 🚀 Features  
- User authentication  
- Note creation, editing, and deletion  
- Session management  
- Clean URL routing using `.htaccess`  

## 📂 Folder Structure  

notes_app/
│── Core/               # Core logic (Router, Database, Session, etc.)
│── Http/               # Controllers for handling requests
│── Forms/              # (Explain what this folder does)
│── public/             # Web root (entry point: `index.php`)
│   ├── .htaccess       # Handles routing
│   ├── index.php       # Front controller
│── README.md           # Documentation

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