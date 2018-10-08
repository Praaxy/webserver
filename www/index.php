<?php
$map[0] = "index1.php";
$map[1] = "index2.php";
$map[2] = "index3.php";
$i = rand(0, 2);
header('Location: /'.$map[$i]);
?>