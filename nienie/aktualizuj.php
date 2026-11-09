<?php
$conn = mysqli_connect("localhost","root","","mysqli_example");
$id = $_POST['id'];
$cena = $_POST['cena'];
$sql = "UPDATE produkty SET cena = '$cena' WHERE id = $id";
$result = mysqli_query($conn, $sql);
header('Location: index.php');  