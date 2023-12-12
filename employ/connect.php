<?php
session_start();
$host = "localhost";
$user = 'root';
$pass= '';
$dp = 'gouniaa';

$conn = mysqli_connect($host,$user,$pass,$dp);
//connection
if ($conn === false){
  die("connection error");
}

