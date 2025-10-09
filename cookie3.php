<p>Kasowanie ciasteczka</p>

<?php
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600, "/");
if(!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie '" . $cookie_name . "' zostało skasowane!";
} else {
    echo "Ciasteczko '" . $cookie_name . "' nadal istnieje!<br>";
    echo "Wartość ciasteczka to: " . $_COOKIE[$cookie_name];
}
?>