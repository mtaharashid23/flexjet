<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>    
</head>

<body>    

    <!-- PRELOADER -->
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <img src="images/logo.png" alt="img">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto header-main__nav">
                        <li class="nav-item active">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Business Solutions</a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link centerLogo" href="index.php"><img src="images/logo.png"
                                        class="img-fluid" alt="img"></a>
                            </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">our Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#searchBtn"><i class="far fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
