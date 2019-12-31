<?php
$date_string = "2020-01-10";
$date_int = strtotime($date_string);
$date_date = date($date_int);
$week_number = date('W', $date_date);
echo "Weeknumber: {$week_number}.";



?>

