<?php

include_once("constant.php");

// connect database
// $link = mysqli_connect("localhost", "root", "root", 'accounting'); // local
$link = mysqli_connect("vinix.homeftp.net", "Ratana", "DDp6ZN9j9KOm7esG", 'accounting'); // server

if (!$link) {
    die('Could not connect: ' . mysqli_error(link));
}


?>