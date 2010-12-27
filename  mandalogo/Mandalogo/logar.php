<?php
include_once 'Util.php';

$usuario = $_POST["usuario"];
$senha  = $_POST["senha"];
$pagina = $_GET["pagina"];

$resultado = valida_login_no_BD($usuario,$senha,$pagina);

if(!resultado) {
	echo "<a href= index.php>";
}
else {
	if (!isset($_SESSION)) session_start();
		
		$_SESSION['user'] = $resultado['login'];
 		$_SESSION['group'] = $resultado['group'];
 		
 		//echo "<script>location.href='$pagina'</script>";
 		header("Location: $pagina");
}
?>