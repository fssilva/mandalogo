<?php
session_start("login");

function cadastrar($usuario,$senha,$lembrete,$email){
 	include("usuarios.php");
 	if(($usuario=="") OR ($senha=="") OR ($lembrete=="") OR ($email=="")){
 		echo "<font face=verdana size=2>";
 		echo "Todos os campos são de preenchimento obrigatório.";
 		echo "<br>";
 		echo "<a href=javascript:history.back(1)>";
 		echo "Voltar";
 		echo "</a></font>";
 	}
 	else{
 		if($Senha_u[$usuario]){
 		echo "<font face=verdana size=2>";
 		echo "Usuário já existe. Escolha outro nome.";
 		echo "<br>";
 		echo "<a href=javascript:history.back(1)>";
 		echo "Voltar";
 		echo "</a></font>";
 	}
 	else{
 	$varsenha = "Senha_u[";
 	$varemail = "Email_u[";
 	$varpalavra = "Palavra_u[";
 	$fp=fopen("usuarios.php","a+");
 	fputs($fp,"
	<?php
	//Configurações do usuário: $usuario
	$$varsenha$usuario] = \"$senha\";
	$$varemail$usuario] = \"$email\";
	$$varpalavra$usuario] = \"$lembrete\";
	?> ");
 	fclose($fp);
 	echo "<font face=verdana size=2>";
 	echo "Cadastro realizado com sucesso!";
 	echo "<br>";
 	echo "<a href=javascript:history.back(1)>";
 	echo "Voltar";
 	echo "</a></font>";
 
 	}
  }
}

function retornaLogin() {
	return $_SESSION["user"];
}

function retornaPastaDoUsuario() {
	include("usuarios.php");
 	return $Root_Directory_u[$_SESSION["user"]];
	
}
function lerDiretorio( $diretorio ) {
	// pega o endereço do diretório
	//$diretorio = getcwd(); 
	// abre o diretório
	$ponteiro  = opendir($diretorio);
	// monta os vetores com os itens encontrados na pasta
	while ($nome_itens = readdir($ponteiro)) {
		$itens[] = $nome_itens;
	}
	// ordena o vetor de itens
	sort($itens);
	// percorre o vetor para fazer a separacao entre arquivos e pastas 
	foreach ($itens as $listar) {
	// retira "./" e "../" para que retorne apenas pastas e arquivos
	   if ($listar!="." && $listar!=".."){ 
	
	// checa se o tipo de arquivo encontrado é uma pasta
			if (is_dir($listar)) { 
	// caso VERDADEIRO adiciona o item à variável de pastas
				$pastas[]=$listar; 
			} else{ 
	// caso FALSO adiciona o item à variável de arquivos
				$arquivos[]=$listar;
			}
	   }
	}
	
	// lista as pastas se houverem
	if ($pastas != "" ) { 
	foreach($pastas as $listar){
	   print "Pasta: <a href='$listar'>$listar</a><br>";}
	   }
	// lista os arquivos se houverem
	if ($arquivos != "") {
	foreach($arquivos as $listar){
	   print " Arquivo: <a href='$listar'>$listar</a><br>";}
	}
}


function valida_login($usuario,$senha,$pagina){
 	include("usuarios.php");
 	if(!$Senha_u[$usuario]){
 		echo "<font face=verdana size=2>";
 		echo "Usuário ou Senha incorretos";
 		echo "<br>";
 		echo "<a href=javascript:history.back(1)>";
 		echo "Voltar";
 		echo "</a></font>";
 }
 elseif($Senha_u[$usuario]==$senha){
 	$_SESSION["user"] = $usuario;
 	$_SESSION["pass"] = $senha;
 	echo "<script>location.href='$pagina'</script>";
 }
 else{
 	echo "<font face=verdana size=2>";
 	echo "Usuário ou Senha incorretos";
 	echo "<br>";
 	echo "<a href=javascript:history.back(1)>";
 	echo "Voltar";
 	echo "</a></font>";
 }
}

function email($usuario){
 	include("usuarios.php"); 
 	if(!$Senha_u[$usuario]){
 	echo "<font face=verdana size=2>";
 	echo "Usuário inexistente";
 	echo "<br>";
 	echo "<a href=javascript:history.back(1)>";
 	echo "Voltar";
 	echo "</a></font>";
 }
 else{
 	mail($Email_u[$usuario],"Sua senha!","Sua senha em nosso sistema é: $Senha_u[$usuario]","");
 	echo "<font face=verdana size=2>";
 	echo "Por favor, verifique sua caixa de e-mails.";
 	echo "<br>";
 	echo "<a href=javascript:history.back(1)>";
 	echo "Voltar";
 	echo "</a></font>"; 
  }
}

function mostrar_palavra($usuario){
 	include("usuarios.php"); 
 	if(!$Senha_u[$usuario]){
 	echo "<font face=verdana size=2>";
 	echo "Usuário inexistente";
 	echo "<br>";
 	echo "<a href=javascript:history.back(1)>";
 	echo "Voltar";
 	echo "</a></font>";
 }
 else{
 	echo "<font face=verdana size=2>";
	echo "Lembrete de senha: <b>$Palavra_u[$usuario]</b>";
 	echo "<br>";
 	echo "<a href=?acao=email&usuario=$usuario>";
 	echo "Ainda não lembrei...";
 	echo "<br>";
	echo "<a href=javascript:history.back(1)>";
 	echo "Voltar";
	echo "</a></font>";
 }
}
?>
