<?php
$conn = mysqli_connect("localhost","root","","mysqli_example");
$nazwa = $_POST['nazwa'];
$email = $_POST['email'];
$id = $_POST['id'];
$sql = "UPDATE uzytkownicy SET nazwa = '$nazwa', email = '$email' WHERE id = $id";
$result = mysqli_query($conn, $sql);
