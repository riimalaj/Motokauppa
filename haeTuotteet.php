<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <title></title>
    <meta name="description"
          content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="styles.css">
</head>


<body> <?php
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

?> <script src="moto.js"
            async
            defer></script>
</body>

</html>