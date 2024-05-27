<?php 
$server='localhost';
$user='root';
$password='';
$database='yazilimgelistirme';

$baglanti=mysqli_connect($server,$user,$password,$database);

if(!$baglanti){
    echo "MYSQL sunucu ile baglanti kuramadı <br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}