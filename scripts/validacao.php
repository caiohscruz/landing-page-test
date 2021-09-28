<?php
// Campo que fez requisição
$campo = $_GET['campo'];
// Valor do campo que fez requisição
$valor = $_GET['valor'];

// Verificando o valor do campo email
if (!eregi("^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$", $valor)) {
    echo "Preencha com um email válido"; //
}

// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>