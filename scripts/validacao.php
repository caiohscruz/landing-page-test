<?php
$campo = $_GET['campo'];
$valor = $_GET['valor'];
	
	if (!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $valor)) {
		echo "Preencha com um email válido";
	}
?>