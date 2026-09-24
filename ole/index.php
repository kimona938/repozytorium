
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','mysqli_example');
$sql = "SELECT * FROM uzytkownicy";
$result = mysqli_query($conn, $sql);
?>
    <form action='adduser.php' method='POST'>
        <label for='nazwa'>
            <p>Podaj swoją nazwę:</p>
            <input type='text' name='nazwa' id='nazwa'/>
        </label>
        <label for='email'>
            <p>Podaj swój email:</p>
            <input type='email' name='email' id='email'/>
        </label>
        <label for='haslo'>
            <p>Podaj swoje haslo:</p>
            <input type='text' name='haslo' id='haslo'/>
        </label>
     
        <?php
        $conn = mysqli_connect("localhost","root","","mysqli_example");
        if($conn){
            echo "połączono";
    
        }
        else{
            echo "nie połączono";
        }
        $sql = "SELECT * FROM uzytkownicy";
        $result = mysqli_query($conn,$sql);
        while($row =  mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nazwa = $row['nazwa'];
            $email = $row['email'];
            echo"
            <tabel>
            <td>
            <th>id</th>
            <th> nazwa </th>
            <th>email </th>
            </td>
             <td>
            <th> $id</th>
            <th> $nazwa</th>
            <th> $email</th>
            </td>


            </tabel>
            ";
        }
        ?>

        
    
        <button>Dodaj</button>
    </form>
</body>
</html>