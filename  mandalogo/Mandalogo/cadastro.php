<?php

if (!isset($_SESSION)) session_start();

//include 'funcoes.php';
include 'newFunctions.php';

protegerAllPage();
onlyAdmin();

if($_GET["acao"]=="cadastra"){
 //cadastrar($_POST["usuario"],$_POST["senha"],$_POST["lembrete"],$_POST["email"]);
 cadastraNoBD($_POST["usuario"],$_POST["group"]);
}
else{
?>
<html>
<head>
<title>Cadastro</title>
</head>
<body>
<p><b><font size="2" face="Verdana">Preencha todos os campos do formulário
abaixo para poder se cadastrar.</font></b></p>
<form method="POST" action="?acao=cadastra">
  <p><font size="2" face="Verdana">Nome de usuario:<br>
  <input type="text" name="usuario" size="40"><br>
  Group:<br>
  <input type="radio" name="group" value="0"> User
  <input type="radio" name="group" value="1"> Moderator
  <input type="radio" name="group" value="2"> Admin<br><br>
  <input type="submit" value="Cadastrar"> </font></p>
</form>
</body>
</html>
<?php } ?>
