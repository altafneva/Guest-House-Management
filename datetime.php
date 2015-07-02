<?php
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $name =  $date->format('d-m-Y h:i:s');
 echo $name;
 ?>