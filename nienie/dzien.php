<?php
$conn = mysqli_connect("localhost", "root", "", "mysqli_example");
    $id_zakupu = $_POST["id_zakupu"];

    $sql = "SELECT id_zakupu, p.nazwa, ilosc, hz.cena, (hz.cena * hz.ilosc) wartosc FROM historia_zakupow hz INNER JOIN produkty p ON hz.id_produktu = p.id INNER JOIN uzytkownicy u ON hz.id_uzytkownika = u.id WHERE id_zakupu = $id_zakupu";
    $wynik = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($wynik)) {
    echo "<p> id_zakupu: $row[id_zakupu] - nazwa produktu: $row[nazwa]- ilosc: $row[ilosc] - cena: $row[cena] - wartosc $row[wartosc]</p>";
    }

