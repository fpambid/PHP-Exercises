<?
$dtz = new DateTimeZone("Europe/Rome");
echo "Time Zone: " . $dtz->getName() . "<br/>";
foreach ($dtz->getLocation() as $key => $value) {
echo "{$key} {$value}<br/>";
}

?>