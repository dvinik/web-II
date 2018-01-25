<?php


// connect database
// $link = mysqli_connect("localhost", "root", "root", 'accounting'); // local
$link = mysqli_connect("vinix.homeftp.net", "sqlhein", "CsWrM6miZ0J9CjKP", 'accounting'); // server

if (!$link) {
    die('Could not connect: ' . mysqli_error(link));
}


?>