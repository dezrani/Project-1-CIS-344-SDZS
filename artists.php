<!-- Programmer: Sean Derrick Sandoval
About: Mayari is the Moon Goddess of the Philippines. Tattoos were an essential
aspect that was stripped away from my culture due to colonization so I wanted
to implement some of my heritage into this project.
Purpose: Display Artists Page
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

        <!-- About Area -->
        <h1>Artists</h1>
        <div class="artist-container">
            <div class="artist-item">
                <img src="./images/rendant.png">
                <p>Rendant Rynn</p>
            </div>

            <div class="artist-item">
                <img src="./images/jermaine.png">
                <p>Jermaine Coleson</p>
            </div>

            <div class="artist-item">
                <img src="./images/bapill.png">
                <p>Bapill Foan</p>
            </div>

            <div class="artist-item">
                <img src="./images/ayana.png">
                <p>Ayana Grandure</p>
            </div>
        </div>
        

        <?php include('./view/footer.php') ?> <!-- Adds Footer -->
    </body>
</html>