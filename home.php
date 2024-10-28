<!-- Programmer: Sean Derrick Sandoval
About: Mayari is the Moon Goddess of the Philippines. Tattoos were an essential
aspect that was stripped away from my culture due to colonization so I wanted
to implement some of my heritage into this project.
Purpose: Display Home Page
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

        <!-- Welcome Area -->
        <h1>Mayari Tattoos</h1>
        <p>Embrace the art of tattoing with Mayari Tattoos. Inspired by the moon goddess Mayari, we 
            offer a serene and artistic environment where your dreams can become a reality. Whether 
            you are looking for intricate designs, traditional Filipino motifs or custom creations, 
            our talented artists are here to bring your vision to life.</p>

        <!-- About Area
        Short Excerpt -->
        <h1>About</h1>
        <p>Mayari Tattoos blends tradition and modernity, inspired by the Filipino moon goddess. 
            Our skilled artists ensure safe, creative, and personalized designs. 
            Discover your next masterpiece with us.</p>

        <!-- Gallery Area -->
        <div class="gallery-container">
            <h1>Gallery</h1>
            <div class="gallery-grid">
                <img src="./images/gallery-pic1.jpg" alt="Tattoo Example 1">
                <img src="./images/gallery-pic2.jpg" alt="Tattoo Example 2">
                <img src="./images/gallery-pic3.jpg" alt="Tattoo Example 3">
                <img src="./images/gallery-pic4.jpg" alt="Tattoo Example 4">
            </div>
            <button><a href="artists.php">View Artists</a></button>
        </div>

        <?php include('./view/footer.php') ?> <!-- Adds Footer -->
    </body>
</html>