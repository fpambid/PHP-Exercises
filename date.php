<?php

$tz = new DateTimeZone("Asia/Manila");
$dt = new DateTime("now", $tz);
echo "date: " . $dt->format("Y-m-d h:i:s");
?>