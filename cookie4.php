<P>Cwiczenie</P>

<?php
$cookie_name = "uczen";
$cookie_value = "Dawid";
$cookie_expire = time() + (3 * 86400);
setcookie($cookie_name, $cookie_value, $cookie_expire, "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie '" . $cookie_name . "' nie jest ustawione!";
} else {
    echo "Ciasteczko '" . $cookie_name . "' jest ustawione!<br>";
    echo "Wartość ciasteczka to: " . $_COOKIE[$cookie_name];
}
?>
