<!-- Programmer: Sean Derrick Sandoval
Purpose: Handles the contact form requests database (Might be unfinished.)
Date Created: 9/24/2024
-->

<?php
    $dsn = "mysql:host=localhost;dbname=tattooparlordb"; // Connects to a mysql database driver and localhost since I'm using XAMPP.
    // Set username and password for database
    $dbusername = "root";
    $dbpassword = "root";

    try { // Error handling
        $pdo = new PDO($dsn, $dbusername, $dbpassword); // Connects to a database using php data objects which is a bit more flexible.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // If we get an error, then we throw an exception.
    } catch (PDOException $e) { // Catches the error and sets it to the variable $e
        echo "Connection failed: " . $e->getMessage(); // Shows the error message.
    }
?>