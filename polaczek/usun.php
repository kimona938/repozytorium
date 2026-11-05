<?php
$conn = mysqli_connect('localhost','root','','mysqli_example');
$id = $_POST['id'];


$sql = "DELETE FROM uzytkownicy WHERE id = $id";
$sql2 = "DELETE FROM historia_zakupow WHERE id_uzytkownika = $id";
$sql3 = "DELETE FROM koszyk WHERE id_uzytkownika = $id";
mysqli_query($conn, $sql3);
mysqli_query($conn, $sql2);
mysqli_query($conn, $sql);
header('Location: index.php');  

