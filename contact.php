<!-- Programmer: Sean Derrick Sandoval
About: Mayari is the Moon Goddess of the Philippines. Tattoos were an essential
aspect that was stripped away from my culture due to colonization so I wanted
to implement some of my heritage into this project.
Purpose: Display Contact Page
Date Created: 9/23/2024
-->

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mayari Tattoos - Blessed by the Moon</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php include('./view/header.php') ?> <!-- Adds Header -->

        <!-- Questionaire -->
        <h1>Got a question?</h1>
        <p>Please fill out the form or reach out to info@mayaritattoos.com.</p>
        <p>We'll get back to you as soon as we can.</p>

        <!-- Form -->
        <h1>Reach out here:</h1>
        <form action="./view/contact-form.php" method="POST">
            <!-- Whole Name Textbox -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <!-- Email Textbox -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <!-- Phone Number Textbox -->
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

            <!-- Comment Textbox -->
            <label for="comment">Comment:</label>
            <input type="text" name="comment" id="comment" required>

            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>

        <?php include('./view/footer.php') ?> <!-- Adds Footer -->
    </body>
</html>