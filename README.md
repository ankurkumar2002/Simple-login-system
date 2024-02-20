<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>

<body>

<h1>Simple PHP Login System (Under Development)</h1>

<p>This is a minimalistic PHP-based login system with a user registration feature. It provides a basic authentication mechanism for web applications where users can register, log in, and access a simple dashboard upon successful authentication.</p>

<h2>Features:</h2>

<ul>
    <li><strong>User Registration:</strong> Users can register by providing a unique username, email, and password. Passwords are securely hashed before storage in the database.</li>
    <li><strong>User Login:</strong> Registered users can log in using their credentials. Passwords are verified against the stored hashed values.</li>
    <li><strong>User Dashboard:</strong> Upon successful login, users are directed to a dashboard page that displays a simple welcome message along with a logout link.</li>
    <li><strong>Logout Functionality:</strong> Users can log out, and after logout, they are redirected to the login page.</li>
</ul>

<h2>Installation:</h2>

<ol>
    <li><strong>Database Setup:</strong> Create a MySQL database and tables using the provided SQL script in the <code>db.php</code> file.</li>
    <li><strong>Server Configuration:</strong> Ensure your server is configured to run PHP files. Update the database connection details in the <code>db.php</code> file.</li>
    <li><strong>Usage:</strong> Customize the HTML forms in <code>register.html</code> and <code>login.html</code> to suit your application's design. Users can register through the registration form and then log in to access the dashboard.</li>
</ol>

<h2>Security Considerations:</h2>

<ul>
    <li>This code provides a basic example and is not intended for production use without additional security measures.</li>
    <li>For a production environment, consider implementing features such as input validation, secure session handling, and more robust password policies.</li>
</ul>

<h2>Dependencies:</h2>

<ul>
    <li>PHP</li>
  <li>Bootstrap</li>
    <li>MySQL (or another compatible database)</li>
</ul>



<h2>Status:</h2>

<p><strong>Under Development:</strong> This project is actively being developed. Expect regular updates and improvements.</p>

</body>

</html>
