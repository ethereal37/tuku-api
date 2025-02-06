<?php
$seed =time();
$num = rand(1, 21);
$picpath = "https://github.com/ethereal37/tuku-api/tree/main/img".$num.".jpg";
die(header("Location: $picpath"));
?>
