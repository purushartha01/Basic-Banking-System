<?php
$host="localhost";
$usern="mainuser";
$pswd="";
$dbname="bank";

$connect=mysqli_connect($host,$usern,$pswd,$dbname);

if(!$connect){
    die("Failed to Connect: ".mysqli_connect_error());
}
?>