<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $dbnname = "cadastro";
// $port = 3306;
try{
       $conn = new PDO('mysql:host=localhost;port=3306; dbname=cadastro','root','');
 	   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 } catch (PDOException $e) {

 	 echo 'error: ' . $e->getmessage();
 }

?>