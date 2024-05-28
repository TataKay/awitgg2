<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=pos_barcode_db','root','Ch@nel@#01@#');
} catch (PDOException $e) {
  
  echo $e->getMessage();

}







// echo 'connection success';












?>