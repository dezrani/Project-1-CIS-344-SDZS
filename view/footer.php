<!-- Programmer: Sean Derrick Sandoval
Purpose: General Footer Section of Webpages
Date Created: 9/23/2024
-->

<?php require_once './db-handlers/newsletter-db.php'; ?>

<!-- Footer -->
<footer>
    <!-- Events and Discounts Sign Up -->
    <div class="newsletter-container">
      <h3>Don't miss out on awesome sales and events!</h3>
      <form action="./view/news-form.php" method="POST">
            <!-- Email Textbox -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <!-- Submit Button -->
            <input type="submit" value="Submit">
      </form>
    </div>

    <!-- Footer info -->
    <div class="footer-info-container">

        <!-- Contact Us -->
        <div class="footer-info-item">
            <h3>Contact Us</h3>
            <ul>
                <li>845-236-976</li>
                <li>Email Us</li>
                <li>Returns</li>
            </ul>
        </div>

        <!-- Socials -->
        <div class="footer-info-item">
            <h3>Socials</h3>
            <ul>
                <li>Instagram</li>
                <li>YouTube</li>
                <li>Facebook</li>
                <li>Twitter</li> <!-- I'm not calling it X -->
            </ul>
        </div>
    </div>
</footer>
