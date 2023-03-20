<?php

//establece la zona horaria

date_default_timezone_set('America/Caracas');

//obtener la fecha actual
//$now= date("Y-m-d H:i:s");
//$now = date_create();

//strtotime
//$unix_time = strtotime("next Monday");
//echo date("Y-m-d H:i:s", $unix_time);

//fechas inmutables
//$date_inmutable = new DateTimeImmutable();
//echo $date_inmutable->format('Y-m-d H:i:s');

//diferencia de tiempo

//$today = new DateTime();
//$birthday = new DateTime('1982-09-18');
//$interval = $today->diff($birthday);
//echo $interval->format("%y anios con %d dias");

//Crear fechas desde un formato dado
//$date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
//echo $date->format('Y-m-d H:i:s');

//modificar fecha

$date = new DateTime();
$date->modify('+1 day +2 months');
echo $date->format('Y-m-d H:i:s');





