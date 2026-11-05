<?php
$conn =  mysqli_connect('localhost','root','','mysqli_example');
$id = $_POST['id'];
$sql = "DELETE FROM uzytkownicy WHERE id = $id";
mysqli_query($conn, $sql);