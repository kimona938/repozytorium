<?php
$conn = mysqli_connect("localhost","root","","mysqli_example");
$nazwa = $_POST['nazwa'];
$id = $_POST['id'];
$email = $_POST['email'];
$sql = "UPDATE uzytkownicy SET nazwa = 'Ogorek', email = 'alala@ww.2' WHERE id = '4'";
$result = mysqli_query($conn, $sql);