<?php

$query = "INSERT INTO clients (email) VALUES ('$valor')";

try{
    mysqli_query($mysql, $query);
    echo "<font color='blue'>E-mail cadastrado com sucesso</font>";
}catch(Exception $err){
    echo "<font color='red'>Erro interno - inserção. Por favor, contacte o administrador</font>";
}

?>