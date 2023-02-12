<?php
$host='localhost';
$user= 'root';
$password=' ';
$database='main';


try{
     
    $pdodbcon = new PDO("mysql:host=$host;dbname=$database",$user);
    $pdodbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo '<h1>Database connected</h1>';


}
catch(PDOException $error){
    $error->getMessage();
    // echo '<h1>Database failed to connect </h1>';
}
?>