<!-- Programmer: Sean Derrick Sandoval
Purpose: Handles the contact form
Date Created: 9/23/2024
-->

<!-- Booking Form -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") // If the request method is post, then set these variables
    {
        // Not the most secure method but works for my project.
        $name = htmlspecialchars($_POST["first-name"]); // htmlspecialchars converts to HTML entities so whatever is sent isn't seen as code.
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $comment = htmlspecialchars($_POST["comment"]);
        
        if (empty($name)) // If name is left empty, then we return to first page.
        { // I do this because the 'required' attribute still allows the user to submit.
            exit(); 
            header("Location: ../home.php");
        }

        echo "User submission was successful.";
        echo "<br>";
        echo $firstname . ", you will be receiving an email soon.";
    }
    else {
        header("Location: ../home.php"); // Sends back to home if it doesn't work.
    }
?>