<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="chrome">
    <title>Motarin Verkkokauppa</title>
    <meta name="description"
          content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="styles.css">

</head>

<body>
    <header class="main-header">
        <nav class="main-nav nav">
            <ul>
                <li><a href="#"></a>Kauppa</li>
                <li><a href="admin.php">Admin</a>

                </li>
            </ul>
        </nav>
        <h1 class="band-name band-name-large">Motari</h1>
    </header>
    <section class = "container content-section">
    </section>
    <section class="container content-section">
        <h2 class="section-header">Motot</h2>
        <div class="shop-items">
            <!--<div class = "new"></div>-->
        <?php
            //require "haeTuotteet.php";

            //<?php
            require "connariMoto.php";
            $sql = "SELECT * FROM Motari";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result)){
             echo "<div class = 'shop-item'";
             echo "<span class = 'shop-item-title'><strong>".$row['otsikko']. "</strong></span>";
             echo "<img class ='shop-item-image' " . "src = Images/".$row['kuva'].">";
                 echo "<div class = 'shop-item-details>'";
                     echo "<span class = 'shop-item-price'>€ ".$row['hinta']. "</span>";
                     echo "<button class='btn btn-primary shop-item-button' type='button'>OSTA</button>";
                 echo "</div>";
             echo "</div>";
            }


 ?>

<!--
            <div class="shop-item ">
                <span class="shop-item-title">Indian Scout</span>
                <img class="shop-item-image"
                     src="Images/Indian_Scout.jpg"
                     alt="Indian Scout 2018">
                <div class="shop-item-details">
                    <span class="shop-item-price">€ 15900</span>
                    <button class="btn btn-primary shop-item-button"
                            type="button">OSTA</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Indian Scout Bobber</span>
                <img class="shop-item-image"
                     src="Images/scout-bobber.jpg"
                     alt="Indian Scout 2018">
                <div class="shop-item-details">
                    <span class="shop-item-price">€ 21900</span>
                    <button class="btn btn-primary shop-item-button"
                            type="button">OSTA</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Yamaha YZ85</span>
                <img class="shop-item-image"
                     src="Images/yz85.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">€ 13 000</span>
                    <button class="btn btn-primary shop-item-button"
                            type="button">OSTA</button>
                </div>
            </div>
            -->
        </div> <!--shop-items end div-->
    </section>
    <section class="container content-section">
        <h2 class="section-header">Ostokset</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">Ostos</span>
            <span class="cart-price cart-header cart-column">Hinta</span>
            <span class="cart-quantity cart-header cart-column">Määrä<span>
        </div>
        <div class="cart-items"></div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">€ 0</span>
        </div>
        <button class="btn btn-primary btn-purchase">Kassalle</button>
    </section>

    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">Motari</h3>
            <ul class="nav footer-nav">
                <li>
                    <a href="https://www.youtube.com" target="_blank">
                        <img src="Images/YouTube Logo.png">
                    </a>
                </li>
                <li>
                    <a href="https://www.spotify.com" target="_blank">
                        <img src="Images/Spotify Logo.png">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="Images/Facebook Logo.png">
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="moto.js" async defer></script>
</body>

</html>