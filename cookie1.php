<p>Tworzymy ciasteczko o terminie ważności 1 doby</p>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_expire = time() + (86400);
setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
?>