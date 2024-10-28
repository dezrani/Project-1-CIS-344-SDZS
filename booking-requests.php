<!-- Programmer: Sean Derrick Sandoval
About: Mayari is the Moon Goddess of the Philippines. Tattoos were an essential
aspect that was stripped away from my culture due to colonization so I wanted
to implement some of my heritage into this project.
Purpose: Display Booking Request Form
Date Created: 9/23/2024
-->

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mayari Tattoos - Booking Request Form</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php include('./view/header.php') ?> <!-- Adds Header -->

        <!-- Application Section -->
        <h1>Apply here!</h1>
        <?php require_once './db-handlers/booking-db.php'; ?>

        <!-- Form Section -->
        <div class="form-container">
            <form action="./view/booking-form.php" method="POST"> <!-- Tells how and where to send the data. POST submits without showing. -->
                <!-- First Name Textbox -->
                <label for="first-name">First Name:</label>
                <input type="text" name="first-name" id="first-name" required>
                
                <!-- Last Name Textbox -->
                <label for="last-name">Last Name:</label>
                <input type="text" name="last-name" id="last-name" required>
            
                <!-- Email Textbox -->
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <!-- Artist Dropdown Menu -->
                <label for="artist">Select Artist</label>
                <select name="artist">
                    <option value="">-- Select Artist --</option>
                    <option value="artist-rendant">Rendant Rynn</option>
                    <option value="artist-jcole">Jermaine Coleson</option>
                    <option value="artist-bapill">Bapill Foan</option>
                    <option value="artist-ayana">Ayana Grandure</option>
                </select>

                <!-- Tattoo Type Dropdown Menu -->
                <label for="tattoo-type">Select Tattoo Type</label>
                <select name="tattoo-type">
                    <option value="">-- Select Type --</option>
                    <option value="tat-type-head">Head</option>
                    <option value="tat-type-neck">Neck</option>
                    <option value="tat-type-torso">Torso</option>
                    <option value="tat-type-arm">Arm(s)</option>
                    <option value="tat-type-leg">Leg(s)</option>
                </select>

                <!-- Submit Button -->
                <input type="submit" value="Submit">
            </form>
        </div>

        <?php include('./view/footer.php') ?> <!-- Adds Footer -->
    </body>
</html>