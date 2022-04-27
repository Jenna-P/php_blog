<?php
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Travel Blog</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png" />

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />

    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"><img src="img/blog_logo.png" alt="" width="90" /></a>
            <a href="user.php" style="font-size: 13px; color: #3a414e; position: relative; right:20px; top:24px; font-family: Lora,serif; font-weight: 700;"><?php if(isset($_SESSION['username'])) { echo "Hello, "; echo $_SESSION['username']; } ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav justify-content-center">
                <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?> "><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item <?= ($activePage == 'archive') ? 'active':''; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                <!-- <li class="nav-item <?= ($activePage == 'category') ? 'active':''; ?>"><a class="nav-link" href="category.php">Category</a></li> -->
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li>
              </ul>
              
              <ul class="nav navbar-nav navbar-right navbar-social">
                <?php if(isset($_SESSION["username"])) { ?>
                  <!-- <a href="user.php" style="font-size: 13px; color: #3a414e; position: relative; right:7px;  top:32px; font-family: Lora,serif; font-weight: 700;"><?php if(isset($_SESSION['username'])) { echo "Hello, "; echo $_SESSION['username']; } ?></a> -->
                    <li class="nav-item">
                        <a class="nav-link" href="_logout.php">Logout</a>
                    </li>
                <?php } else { ?>
                <li class="nav-item <?= ($activePage == 'login') ? 'active':''; ?>"><a class="nav-link" href="login.php">Login</a></li>
                <?php } ?>
            </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    
    <!--================Header Menu Area =================-->