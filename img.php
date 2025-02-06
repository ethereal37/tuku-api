<?php
$seed =time();
$num = rand(1, 21);
$picpath = "https://tuku.ethereal.ac.cn/img/".$num.".jpg";
die(header("Location: $picpath"));
?>