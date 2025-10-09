<?php
    $myfile= fopen("plik.txt","w")
                or die("unable to open file");
    $txt="John Doen";
    fwrite($myfile, $txt);
    fclose($myfile);
?>