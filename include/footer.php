<footer class="footer">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <a href="index.php" class="footer_logo">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <div class="signup">
                    <h4>Stay Connected</h4>
                    <form class="signup_form">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit" class="themeBtn border-0">Get A Quote</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_main">
            <div class="row align-items-start justify-content-between">
                <div class="col-md-4">
                    <div class="footer_main_content">
                        <p>
                            Air Affair sets the standard in private aviation by combining modern luxury, personalized
                            service, and complete discretion. Whether it’s a last-minute business flight or a planned
                            escape, we ensure your journey is flawless.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="footer_main_nav">
                        <li><a href="about.php">About Us</a></li> 
                <li><a href="services.php">Services</a></li>
                <li><a href="fleet.php">Aircraft</a></li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="inquire.php">Contact Us</a></li>                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_copyright text-center">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> Air Affair. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php include 'include/js.php'; ?>

</body>

</html>