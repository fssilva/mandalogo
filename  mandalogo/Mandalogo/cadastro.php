<?php
include("funcoes.php");
proteger();
if($_GET["acao"]=="cadastra"){
 cadastrar($_POST["usuario"],$_POST["senha"],$_POST["lembrete"],$_POST["email"]);
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
  <p><font size="2" face="Verdana">Nome de usuário:<br>
  <input type="text" name="usuario" size="20"><br>
  Senha:<br>
  <input type="password" name="senha" size="20"> <br>
  Lembrete de senha:<br>
  <input type="text" name="lembrete" size="20"> <br>
  E-mail:<br>
  <input type="text" name="email" size="20"> <br>
  <input type="submit" value="Cadastrar"> </font></p>
</form>
</body>
</html>
<?php } ?>
