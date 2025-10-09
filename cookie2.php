<p>Odczytujemy ciasteczko o podanej nazwie</p>

<?php
$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie '" . $cookie_name . "' nie jest ustawione!";
} else {
    echo "Ciasteczko '" . $cookie_name . "' jest ustawione!<br>";
    echo "Wartość ciasteczka to: " . $_COOKIE[$cookie_name];
}
?>
