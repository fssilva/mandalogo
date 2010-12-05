<?php
include("funcoes.php");
if($_GET["acao"] == "lembrar"){
 mostrar_palavra($_POST["usuario"]);
}
elseif($_GET["acao"] == "email"){
 email($_GET["usuario"]);
}
else{
?>
<html>
<head>
<title>Esqueci a senha</title>
</head>
<body>
<p><b><font size="2" face="Verdana">Digite seu nome de usuário para ver o
lembrete.</font></b></p>
<form method="POST" action="?acao=lembrar">
  <p><font size="2" face="Verdana">Nome de usuário:<br>
  <input type="text" name="usuario" size="20"> <input type="submit" value="Lembrar"></font></p>
</form>
</font></p>
<?
echo "<a href=javascript:history.back(1)>";
echo "Voltar";
?>
</body>
</html>
<?php
}
?>