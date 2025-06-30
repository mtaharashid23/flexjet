<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home | Air Affair';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-main p-0">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <img src="images/logo.png" alt="image" class="<?php echo isset($logowhite) ? $logowhite : 'img-fluid';  ?>">
                </a>
                <ul>
                    <li>
                        <button class="btn btn-menu ml-auto">
                            <div> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <menu class="menulist">
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="fleet.php">Aircraft</a></li>
                <li><a href="programs.php">Programs</a></li>
                <!-- <li><a href="why-air-affair.php">Why Air Affair</a></li>
                <li><a href="lifestyle.php">Lifestyle</a></li>
                <li><a href="resources.php">Resources</a></li> -->
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </menu>
    </header>