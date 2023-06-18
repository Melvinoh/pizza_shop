<?php 

$username = "root";
$passord = "";
$hostname ="localhost:3306";
$dbs = "pizza_shop";

try {
    $db = new mysqli($hostname,$username,$passord,$dbs);
    echo "db connected succefuly";
} catch (\Throwable $th) {

    $th = "could not connect to db";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    echo " $th";
}

?>