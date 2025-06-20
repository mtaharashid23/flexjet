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
    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-main p-0">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <h3>Logo Here</h3>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>                
                <li><a href="#">Contact</a></li>
            </ul>
        </menu>
    </header>