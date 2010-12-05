<?php
include("funcoes.php");
$usuario = $_POST["usuario"];
$senha  = $_POST["senha"];
$pagina = $_GET["pagina"];
valida_login($usuario,$senha,$pagina);
?>