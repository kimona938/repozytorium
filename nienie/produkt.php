<?php
$conn = mysqli_connect("localhost","root","","mysqli_example");
$nazwa= $_POST['nazwa'];
$cena = $_POST['cena'];
$opis = $_POST['opis'];
$kategoria = $_POST['kategoria'];
$sql = "INSERT INTO produkty (nazwa, opis, cena, kategoria) VALUES ('$nazwa', '$opis', '$cena', '$kategoria' )";
mysqli_query($conn, $sql);
header('Location: index.php');  