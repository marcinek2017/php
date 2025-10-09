<?php
$data_poczatkowa = new DateTime('2006-08-13');
$teraz = new DateTime();
$roznica = $data_poczatkowa->diff($teraz);
echo "Od 13 sierpnia 2006 roku minęło: <br>";
echo $roznica->days . " dni.<br><br>";

echo "Czyli: " . $roznica->y . " lat, " . $roznica->m . " miesięcy i " . $roznica->d . " dni.";
?>