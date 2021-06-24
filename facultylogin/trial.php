<?php
// Create a date from string
$date=date('Y/m/d');
$dt = strtotime("$date");

// Increment the date by one month
$new_date = date("Y-m-d", strtotime("+1 month", $dt))."\n";

// Show the new date
echo $new_date;
?>