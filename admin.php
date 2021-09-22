<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <title>Tuotteen lisäys</title>
    <meta name="description"
          content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="adminStyles.css">

</head>

<body> <?php
include("connariMoto.php");
$showData = 0;

$msg = "";
    if (isset($_POST['submit'])) {
        //polun tallennus
        $target = "Images/".basename($_FILES['kuva']['name']);
        $otsikko = $_POST['otsikko'];
        $hinta = $_POST['hinta'];
        $file =$_FILES['kuva']['name'];
        //$file= addslashes(file_get_contents($_FILES["kuva"][]));

        $query = "INSERT INTO motari (otsikko, hinta, kuva) VALUES ('$otsikko', '$hinta', '$file')";
        //echo 'query: '.$query.'<br>';
        $result = mysqli_query($con, $query) or die('inserting values failed '.mysqli_error($con));

        //Siiretään uploadattu file Images hakemistoon
        if (!file_exists($target)){
            if (move_uploaded_file($_FILES['kuva']['tmp_name'], $target)){
                ?><script>alert("Kuva ladattu onnistuneesti Images kansioon")</script>
            <?php
            }
            else{
                ?><script>alert("Kuvan lataamisessa ongelmia")</script>
                <?php
            }
        }

        if ($result)
        {
            ?><!--<script>alert("Tuote ladattu kantaan")</script>-->
            <?php
            $showData = 1;
        }else{
            echo $result;
        }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>

 <h1 class="band-name band-name-large">Tuotteen Lisäys</h1>
    <section class="container content-section">
        <h2 class="section-header">Motot</h2>
        <form class=""
              method="POST"
              enctype="multipart/form-data">
            <label for
                   name="otsikko">Otsikko </label>
                   <input type="text"
                       name="otsikko"
                       width="100px">
            <p>
                <label for
                       name="hinta">Hinta </label><input type="text"
                           name="hinta"
                           width="30px">
                <p>
                    <div class = "kuvis">
                    <label for
                           name="kuva">Kuva tiedosto
                           <input type="file"
                               name="kuva">
                               </label>
                    </div>

                    <p>
                    </p>
                    <input type="submit"
                           class="btn btn-primary btn-purchase"
                           name="submit"
                           value="Kantaan">
        </form>
        <p>
        </p>
        <div id="content">

       <?php
        if ($showData === 1){
            $sql = "SELECT * FROM Motari WHERE Id=(SELECT LAST_INSERT_ID())";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result)){
                echo $row['kuva'];
                echo "<div id = 'tuote'";
                    echo "<p>Otsikko: ".$row['otsikko']. "</p>";
                    echo "<img src = 'Images/".$row['kuva']."'>";
                    echo "<p>Tuotteen hinta: ".$row['hinta']. "</p>";
                echo "</div>";
            }
        }

?> </div>
    <script src = "moto.js" async defer></script>
</body>

</html>