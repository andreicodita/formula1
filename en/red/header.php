<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
        <nav class="navbar">
            <div class="navbar_container">
                <a href="#" id="navbar_logo">FORMULA 1</a>
                <div class="navbar_toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar_menu">
                    <li class="navbar_item">
                        <a href="home.php" class="navbar_links" id="home-page">Home</a>
                    </li>
                    <li class="navbar_item">
                        <a href="about.php" class="navbar_links" id="home-page">About</a>
                    </li>
                    <li class="navbar_item">
                        <a href="quiz.php" class="navbar_links" id="about-page">Quiz</a>
                    </li>
                    <li class="navbar_item">
                        <a href="calendar.php" class="navbar_links" id="services-page">Calendar</a>
                    </li>
                    <li class="navbar_item">
                    <?php  if (isset($_SESSION['username'])) { ?>
                        <a href="logout.php?logout='1'" class="button" id="signup">Log-out</a>
                    <?php } else { ?>
                        <a href="register.php" class="button" id="signup">Sign Up</a>
                    <?php } ?>
                    </li>
                    <li class="navbar_item">
                        <a href="/website/ro/red/home.php" class="button">Romana</a>
                    </li>
                    <li class="navbar_item">
                        <a href="/website/en/cyan/home.php" class="button">Cyan</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script src="app.js"></script>
    </body>
</html>