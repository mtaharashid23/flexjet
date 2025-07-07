<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';?> | Air Affair</title>
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
                    <img src="<?php echo isset($logowhite) ? $logowhite : 'images/logo.png';  ?>" alt="image"
                        class="img-fluid">
                </a>
                <ul class="header-main__nav">
                    <li>
                        <button class="btn btn-menu ml-auto magnetic" data-strength="25">
                            <div> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#flightModal" class="themeBtn magnetic"
                            data-strength="25" data-strength-text="15">
                            <div class="btn-fill"></div>
                            <span class="btn-text">
                                <span class="btn-text-inner change">Request a quote</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <menu class="menulist">
            <ul>
                <li class="magnetic" data-strength="25"><a href="about.php">About Us</a></li>
                <li class="magnetic" data-strength="25"><a href="services.php">Services</a></li>
                <li class="magnetic" data-strength="25"><a href="fleet.php">Aircraft</a></li>
                <li class="magnetic" data-strength="25"><a href="programs.php">Programs</a></li>
                <!-- <li><a href="why-air-affair.php">Why Air Affair</a></li>
                <li><a href="lifestyle.php">Lifestyle</a></li>
                <li><a href="resources.php">Resources</a></li> -->
                <li class="magnetic" data-strength="25"><a href="contact.php">Contact Us</a></li>
            </ul>
        </menu>
    </header>