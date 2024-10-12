<!DOCTYPE html>
    <html lang="de">

    <head>
        <?php
        if ($GLOBALS['title']) {
            $title = $GLOBALS['title'];
        } else {
            $GLOBALS['title'] = "";
        }
        if ($GLOBALS['desc']) {
            $desc = $GLOBALS['desc'];
        } else {
            $desc = "";
        }
        if ($GLOBALS['keywords']) {
            $keywords = $GLOBALS['keywords'];
        } else {
            $keywords = "";
        } ?>

        <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keywords; ?>">
        <meta name="description" content="<?php echo $desc ?>" />
        <meta charset="utf-8">
    <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <title>Home</title>
  <link rel="stylesheet" href="./assets/css/slick.css" />
  <meta name="description" content="#">


  <link rel="stylesheet" href="./assets/css/style.min.css" />
    </head>

    <body class="<?php if (basename($_SERVER['PHP_SELF']) !== "index.php" && basename($_SERVER['PHP_SELF']) !== "" && basename($_SERVER['PHP_SELF']) !== "/") { ?> noIndexBody <?php } ?>">

    <section class="cta_nav_bar">
        <div class="container">
           <p class="text-center">Get your free credit assessment today,<a href="#">Start now</a>
           </p>
           
        </div>
     </section>
      <!-- header  -->
      <header>
        <nav class="navbar navbar-expand-lg bg-white" id="header-lower">
          <div class="container-fluid">
            <a class="navbar-brand" href="./"
              ><img src="./assets/img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="fa-solid fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="./faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./packages.php">Packages</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resources
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./resources-collection.php">Resources Collection</a>
                    <a class="dropdown-item" href="./resources-number.php">Resources Numbers</a>
                    
                  </div>
                </li>  
               
               
              </ul>
              <form class="d-lg-flex d-block gap-3">
               
  <a href="./signin.php" class="theme-btn">Login</a>
                <a href="./signup.php" class="theme-btn dark">Sign Up</a>
              </form>
            </div>
          </div>
        </nav>
      </header>