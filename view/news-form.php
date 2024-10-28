<!-- Programmer: Sean Derrick Sandoval
Purpose: Handles the newsletter form
Date Created: 9/24/2024
-->

<!-- Newsletter Form -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") // If the request method is post, then set these variables
    {
        // Not the most secure method but works for my project.
        $email = htmlspecialchars($_POST["email"]);
        
        if (empty($email)) // If name is left empty, then we return to first page.
        { // I do this because the 'required' attribute still allows the user to submit.
            exit(); 
            header("Location: ../home.php"); // Sends back to home page.
        }

        echo "User submission was successful.";
        echo "<br>";
        echo $firstname . ", you will be receiving an email soon.";
    }
    else {
        header("Location: ../home.php"); // Sends back to home if it doesn't work.
    }
?>