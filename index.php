<?php
$d = rand(1,500);
$r = $d / 2;
$s = pi()*pow($r,2); 
$s = (int)$s;
echo "<div style=\"width:". $d ."px;height:". $d ."px;border-radius:50%;background:blue;\"></div><div><p>Площадь круга: ".$s."</p></div>";