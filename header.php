<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Handmade Store </title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
        require ('functions.php');
    ?>
</head>

<body>

    <!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">First New Cairo, Cairo Governorate </p>
            <div class="font-rale font-size-14">
                <a href="loginForm/login.php" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist (<?php 
                    if(isset($_SESSION['id'])){
                        echo count($product->getCart('wishlist'));
                    }
                    else{
                        echo 0;
                    }
                ?>)</a>
            </div>
        </div>
        
        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand" href="#"> Handmade Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"> Home </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Items<i class="fas fa-chevron-down"></i></a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Items
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Newest Items</a>
                            <a class="dropdown-item" href="#">Top Rated</a>
                            <a class="dropdown-item" href="#">Most Sold</a>
                        </div>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Category
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="MEN.php">For Men</a>
                            <a class="dropdown-item" href="WOMEN.php">For Women</a>
                            <a class="dropdown-item" href="ACCESSORIES.php">Accessories</a>
                            <a class="dropdown-item" href="BAGS.php">Bags</a>
                            <a class="dropdown-item" href="CRAFTS_DECOR.php">Crafts/Home Decor/Accent Furniture</a>
                            <a class="dropdown-item" href="mobileaccessories.php">Mobile/Laptop accessories</a>
                            <a class="dropdown-item" href="SKINCARE.PHP">Soap/Perfumes & Skincare</a>
                            <a class="dropdown-item" href="kIDS.php">Kids</a>
                            <a class="dropdown-item" href="GIFTS.php">Gifts</a>
                            <a class="dropdown-item" href="PORTRAITS.php">Portraits</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Coming Soon</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="loginForm/logout.php">Logout</a>
                    </li>
                </ul>
                <form action="#" class="font-size-14 font-rale">
                    <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php 
                            if(isset($_SESSION['id'])){
                                echo count($product->getCart('cart'));
                            }
                            else{
                                echo 0;
                            }
                            
                            ?>
                        </span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- !Primary Navigation -->
        
    </header>
    <!-- !start #header -->

    <!-- start #main-site -->
    <main id="main-site">