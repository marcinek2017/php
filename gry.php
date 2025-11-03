<?php

$conn = mysqli_connect("localhost", "root", "", "gry");

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

if (isset($_POST['nazwa']) && !empty($_POST['nazwa'])) {
    $nazwa = mysqli_real_escape_string($conn, $_POST['nazwa']);
    $opis = mysqli_real_escape_string($conn, $_POST['opis']);
    $cena = mysqli_real_escape_string($conn, $_POST['cena']);
    $zdjecie = mysqli_real_escape_string($conn, $_POST['zdjecie']);
    $punkty = 0;

    $query4 = "INSERT INTO gry (nazwa, opis, punkty, cena, zdjecie) VALUES ('$nazwa', '$opis', $punkty, $cena, '$zdjecie');";
    mysqli_query($conn, $query4);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>

    <div class="lewa">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
            <?php
  
            $result1 = mysqli_query($conn, "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5;");
            while ($row = mysqli_fetch_array($result1)):
            ?>
                <li><?= $row['nazwa'] ?> <span class='punkty'><?= $row['punkty'] ?></span></li>
            <?php endwhile; ?>
        </ul>

        <h3>Nasz sklep</h3>
        <p><a href="http://sklep.gry.pl">Tu kupisz gry</a></p>

        <h3>Stronę wykonał</h3>
        <p>[WSTAW TUTAJ SWÓJ NUMER ZDAJĄCEGO]</p>
    </div>

    <div class="srodkowa">
        <?php
   
        $result2 = mysqli_query($conn, "SELECT id, nazwa, zdjecie FROM gry;");
        while ($row = mysqli_fetch_array($result2)):
        ?>
            <div class='gra'>
                <img src='<?= $row['zdjecie'] ?>' alt='<?= $row['nazwa'] ?>' title='<?= $row['id'] ?>'>
                <p><?= $row['nazwa'] ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <div class="prawa">
        <h3>Dodaj nową grę</h3>
        <form method="POST" action="gry.php">
            <label for="nazwa">nazwa</label><br>
            <input type="text" id="nazwa" name="nazwa"><br>

            <label for="opis">opis</label><br>
            <input type="text" id="opis" name="opis"><br>

            <label for="cena">cena</label><br>
            <input type="number" step="0.01" id="cena" name="cena"><br>

            <label for="zdjecie">zdjęcie</label><br>
            <input type="text" id="zdjecie" name="zdjecie"><br><br>

            <input type="submit" value="DODAJ">
        </form>
    </div>

    <div class="clear-fix"></div> <footer>
        <form method="POST" action="gry.php">
            <input type="number" name="id_opisu" placeholder="Wpisz ID gry">
            <input type="submit" value="Pokaż opis">
        </form>

        <?php

        if (isset($_POST['id_opisu']) && !empty($_POST['id_opisu'])) {
            $id_opisu = mysqli_real_escape_string($conn, $_POST['id_opisu']);
            $query3 = "SELECT nazwa, LEFT(opis, 100) AS opis_skrocony, punkty, cena FROM gry WHERE id = $id_opisu;";
            $result3 = mysqli_query($conn, $query3);

            if (mysqli_num_rows($result3) > 0) {
                $row = mysqli_fetch_array($result3);
                echo "<h2>{$row['nazwa']}, {$row['punkty']} punktów, {$row['cena']} zł</h2>";
                echo "<p>{$row['opis_skrocony']}</p>";
            } else {
                echo "<p>Brak gry o podanym ID.</p>";
            }
        }

        mysqli_close($conn);
        ?>
    </footer>

</body>
</html>