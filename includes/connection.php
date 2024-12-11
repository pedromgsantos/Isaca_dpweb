<?php
$user = 'isaca';
$pass = 'isaca';
$database = 'isaca1';

try{
    $dbh =  new PDO('mysql:host=localhost;charset=utf8;dbname='.$database, $user, $pass);
}catch(PDOException $e){
    echo $e;
}

?>