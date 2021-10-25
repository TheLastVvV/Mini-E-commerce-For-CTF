<?php

$db = mysqli_connect("localhost","root","","bootdb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>