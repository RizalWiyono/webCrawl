<?php
$connect = mysqli_connect("localhost","root","","dbCrawl");

if (mysqli_connect_errno())
{
    echo "Koneksi Error : " . mysqli_connect_error();
}

?>

