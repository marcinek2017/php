<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </header>

    <div id="lewy">
        <h3>Polecamy dzieła autorów:</h3>
        <ol>
        <?php

        $conn = new mysqli("localhost", "root", "", "biblioteka");
        $sql = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo "<li>".$row['imie']." ".$row['nazwisko']."</li>";
        }
        ?>
        </ol>
    </div>

    <div id="srodek">
        <h3>ul. Czytelnicza&nbsp;25, Książkowice&nbsp;Wielkie</h3>
        <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
        <img src="biblioteka1.png" alt="książki">
    </div>

    <div id="prawy-gorny">
        <h3>Dodaj czytelnika</h3>
        <form method="post" action="biblioteka.php">
            imię: <input type="text" name="imie"><br>
            nazwisko: <input type="text" name="nazwisko"><br>
            symbol: <input type="number" name="symbol"><br>
            <input type="submit" value="DODAJ">
        </form>
        
    </div>

    <div id="prawy-dol">
        <?php
            if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['symbol'])) {
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $symbol = $_POST['symbol'];

                $sql = "INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('$imie', '$nazwisko', '$symbol')";
                if (mysqli_query($conn, $sql)) {
                    echo "<p>Czytelnik <strong>$imie $nazwisko</strong> został(a) dodany do bazy danych.</p>";
                } else {
                    echo "<p>Wystąpił błąd podczas dodawania czytelnika.</p>";
                }
            } else {
                echo "<p>Brak danych do wyświetlenia – wypełnij formularz powyżej.</p>";
            }
        ?>
    </div>

    <footer>
        <p>Projekt strony: 000000000000</p>
    </footer>

</body>
</html>
