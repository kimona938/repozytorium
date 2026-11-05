
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
        <button>Dodaj</button>
</form>
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

<form action='update.php' method='POST'>
        <label for='id'>
            <p> podaj id  </p>
            <input type = 'number' name='id' id='id'/>
            <label for='nazwa'>
            <p> podaj nową nazwę  </p>
            <input type = 'text' name='nazwa' id='nazwa'/>
            <label for='email'>
            <p> podaj nowy email  </p>
            <input type = 'email' name='email' id='email'/>
            <button>zmień dane</button>
    
       
    </form>
    <form action='usun.php' method='POST'>
         <label for='id'>
            <p> podaj id do usunięcia </p>
            <input type = 'number' name='id' id='id'/>
            <button> usun </button>
</form>
 <form action='deleteuser.php' method='POST'>
         <label for='id'>
            <p> podaj id uzytkownika do usunięcia </p>
            <input type = 'number' name='id' id='id'/>
            <button> usun </button>
</form>
<?php
     $sql = "SELECT * FROM produkty WHERE dostępność = 1";
        $result = mysqli_query($conn,$sql);
        while($row =  mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nazwa = $row['nazwa'];
            $cena = $row['cena'];
            echo"
            <tabel>
            <td>
            <th>id</th>
            <th> nazwa </th>
            <th>cena </th>
            </td>
             <td>
            <th> $id</th>
            <th> $nazwa</th>
            <th> $cena</th>
            </td>


            </tabel>
            ";
        }
?>
<form action='produkt.php' method='POST'>
        <label for='nazwa'>
            <p>Podaj nazwę:</p>
            <input type='text' name='nazwa' id='nazwa'/>
        </label>
         <label for='opis'>
            <p>Podaj opis:</p>
            <input type='text' name='opis' id='opis'/>
        </label>
        <label for='cena'>
            <p>Podaj cene:</p>
            <input type='number' name='cena' id='cena'/>
        </label>
        <label for='kategoria'>
            <p>Podaj kategorie:</p>
            <input type='text' name='kategoria' id='kategoria'/>
        </label>
        <button>Dodaj</button>
</form>

  <form action='aktualizuj.php' method='POST'>
         <label for='id'>
            <p> podaj id  </p>
            <input type = 'number' name='id' id='id'/>
</label>
             <label for='cena'>
            <p> podaj nową cene  </p>
            <input type = 'number' name='cena' id='cena'/>
</label>
            <button> aktualizuj </button>

</form>
<form action='wyswietl.php' method='POST'>
         <label for='id_zakupu'>
            <p> podaj id do wystlenia </p>
            <input type = 'number' name='id_zakupu' id='id_zakupu'/>
            <button> wyswietl </button>
</form>
<?php

?>
</body>
</html>