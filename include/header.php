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
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <h3>Logo Here</h3>
                </a>                
            </nav>
        </div>
    </header>
