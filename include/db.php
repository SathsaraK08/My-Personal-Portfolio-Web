<?php
// $db = mysqli_connect(
//     "localhost",
//     "root",
//     "Romi.5351",
//     "iportfolio"
// );


// Production Environment - AWS RDS Remote MySQL Database Connection Configuration

$host = 'mysql.cdm08uoa8kk2.us-east-1.rds.amazonaws.com';
$db = 'iportfolio';
$user = 'admin';
$pass = 'Romi.5351';
$charset = 'utf8mb4';
//if($db){
//    echo "databse is connected !";
//}else{
//    echo "something is wrong with database !";
//}