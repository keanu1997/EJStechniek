<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EJS-Techniek</title>
    <link rel="icon" href="img/logo/favicon.png" type="image/png" sizes="50x56">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<header>
    <div class="header-top">
        <div class="container flex-fe">
            <div class="slogan">
                <h2>EJS-Techniek</h2>
                <p><i>voor technische oplossingen</i></p>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container flex-sb">
            <h1><a href="index.php">EJS-Techniek</a></h1>
            <nav>
                <ul class="nav-items">
                    <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "active" : "");?>"><a href="index.php">Home</a></li>
                    <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == "/portfolio.php" ? "active" : "");?>"><a href="portfolio.php">Portfolio</a></li>
                    <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == "/contact.php" ? "active" : "");?>"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="logo">
                <a href="index.php"><img src="img/logo/ejs-techniek.png" alt="ejs-techniek"></a>
            </div>
        </div>
    </div>
</header>