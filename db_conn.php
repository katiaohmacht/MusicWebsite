<?php

$sname= "localhost";
$unmae= "phpmyadmin";
$password = "mysnappyadmin";

$db_name = "guestbook";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}