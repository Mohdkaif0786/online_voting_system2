<?php
$host="localhost";
$user="root";
$pass=null;
$dbname="online_voting";
$con=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) or die('connection error');



