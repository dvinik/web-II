<?php


// connect database
// $link = mysqli_connect("localhost", "root", "root", 'accounting'); // local
$link = mysqli_connect("58.8.255.199", "Ratana", "DDp6ZN9j9KOm7esG", 'accounting'); // server

if (!$link) {
    die('Could not connect: ' . mysqli_error(link));
}


?>