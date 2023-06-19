<?php 

$dbusername = "root";
$passord = "";
$hostname ="localhost:3306";
$dbs = "pizza_shop";

try {
    $db = new mysqli($hostname,$dbusername,$passord,$dbs);
} catch (\Throwable $th) {

    $th = "could not connect to db";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    echo " $th";
}

?>
