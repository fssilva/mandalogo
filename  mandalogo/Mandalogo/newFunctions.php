<?php

function protegerAllPage(){
 	$pagina = $_SERVER["PHP_SELF"];
 	if(($_SESSION["user"] == "") OR ($_SESSION["group"] == "")){
 		echo "<script>location.href='login.php?act=frm&pagina=$pagina'</script>";
 		
 	}
}

function onlyAdmin(){
 	$pagina = $_SERVER["PHP_SELF"];
 	if($_SESSION["group"] !=2){
 		echo("Você nao tem permisão para acessar essa pagina. Voce será Redirecionado em 5s.");
 		
 		echo "<script>location.href='index.php'</script>";
 	}

}

function logout() {
	$pagina = $_SERVER["PHP_SELF"];
	unset($_SESSION["user"]); 
	unset($_SESSION["group"]);
 
 echo "<script>location.href='index.php'</script>";
}

function valida_login_no_BD($usuario,$senha,$pagina){
	$conexao = connect();
		
	$usuario = mysql_real_escape_string($usuario);
	$senha = mysql_real_escape_string($senha);
	
	// Validação do usuário/senha digitados
	$sql = 'SELECT `login`, `group` FROM `usuariosAutorizados` WHERE (`login` ='.'"'.$usuario.'")';
	
	$query = mysql_query($sql);
	if (mysql_num_rows($query) != 1) {
		// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
		//echo "<a href=javascript:history.back(2)>";
		return false;
		
	} else {
		// Salva os dados encontados na variável $resultado
		$resultado = mysql_fetch_assoc($query);
		
		return $resultado;
 		
	}
		
}

function cadastraNoBD($usuario, $group) {
	$conexao = connect();
	
	$query = 'INSERT INTO usuariosAutorizados (`login`, `email`, `group`)  values('.'"'.$usuario.'"'.','.'"'.$usuario.'@lcc.ufcg.edu.br'.'"'.','.(int)$group.')';


	$resultado = mysql_query($query,$conexao);
	if($resultado) {
		echo("Usuario Cadastrado");
	}
	else {
		echo("Usuario Nao Pode ser cadastrado");
	}
	
	
}

function connect() {
	
	$msg[0] = "Conex„o com o banco falhou!";
	$msg[1] = "N„o foi possÌvel selecionar o banco de dados!";

	$conexao = mysql_pconnect("localhost","root","root") or die($msg[0]);
	mysql_select_db("Mandalogo_Users",$conexao) or die($msg[1]);
	
	return $conexao;
	
}

?>