<?php

function protegerAllPage(){
 	$pagina = $_SERVER["PHP_SELF"];
 	if(($_SESSION["user"] == "") OR ($_SESSION["group"] == "")){
 		echo "<script>location.href='login.php?act=frm&pagina=$pagina'</script>";
 		
 	}
}

function logout() {
	$pagina = $_SERVER["PHP_SELF"];
	unset($_SESSION["user"]); 
	unset($_SESSION["group"]);
 
 //echo "<script>location.href='index.php'</script>";
 //echo "<script type='text/javascript'> alert('mensagem tal'); </script>";
}

function valida_login_no_BD($usuario,$senha,$pagina){
	$conexao = connect();
		
	$usuario = mysql_real_escape_string($usuario);
	$senha = mysql_real_escape_string($senha);
	
	// Validação do usuário/senha digitados
	$sql = 'SELECT `login`, `group`, `disciplina` FROM `usuariosAutorizados` WHERE (`login` ='.'"'.$usuario.'")';
	
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

function cadastraNoBD($usuario, $group, $disciplina) {
	$conexao = connect();
	
	$query = 'INSERT INTO usuariosAutorizados (`login`, `email`, `group`, `disciplina`)  values('.'"'.$usuario.'"'.','.'"'.$usuario.'@lcc.ufcg.edu.br'.'"'.','.(int)$group.','.'"'.$disciplina.'"'.')';

	$resultado = mysql_query($query,$conexao);
	if($resultado) {
		echo "<font face=verdana size=2>";
 		echo "Usuario cadastrado.";
 		echo "<br>";
 		echo "<a href=cadastro.php>";
 		echo "Cadastrar Outro Usuario";
 		echo "</a><br><a href=index.php>";
 		echo "Inicio";
 		echo "</a></font>";
	}
	else {
		echo "<font face=verdana size=2>";
 		echo "Usuario nao pode ser cadastrado.";
 		echo "<br>";
 		echo "<a href=javascript:history.back(1)>";
 		echo "Voltar";
 		echo "</a></font>";
		
	}
	
	
}

function connect() {
	
	$msg[0] = "Conex„o com o banco falhou!";
	$msg[1] = "N„o foi possÌvel selecionar o banco de dados!";

	$conexao = mysql_pconnect("localhost","root","root") or die($msg[0]);
	mysql_select_db("Mandalogo_Users",$conexao) or die($msg[1]);
	
	return $conexao;
	
}

function sessionCountTimeOut() {
	// set timeout period in seconds
	$inactive = 100;

	// check to see if $_SESSION['timeout'] is set
	if(isset($_SESSION['timeout']) ) {
		$session_life = time() - $_SESSION['start'];
		if($session_life > $inactive)
        	{ session_destroy(); header("Location: deslogar.php"); }
	}
	$_SESSION['timeout'] = time();
}

?>