<?php

$hostname = 'wcwimj6zu5aaddlj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306';
$db_name = 'niuua1wnu2x7wzm8';
$username = 'e08fago65v13kd63';
$password = 'dg743ypfddnqftq3';

try{
    $mysql = new mysqli($hostname, $username, $password, $db_name);
}catch(Exception $err){
    echo "<font color='red'>Erro interno - conexão. Por favor, contacte o administrador</font>";
}

?>