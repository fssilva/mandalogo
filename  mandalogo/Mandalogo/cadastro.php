<?php
include_once 'Util.php';

if (!isset($_SESSION)) session_start();

protegerAllPage();
onlyAdmin();

if($_GET["acao"]=="cadastra"){
 cadastraNoBD($_POST["usuario"],$_POST["group"]);
}
else{
?>
<html>
<head>
<title>Cadastro</title>

<script type="text/javascript">

function enable_disable_radio(action) {
	if(action.value == 0) {
		document.cadastroForm.discip.disabled = false;
		document.cadastroForm.discip2.disabled = false;
		document.cadastroForm.discip3.disabled = false;
	}
	else {
		document.cadastroForm.discip.disabled = true;
		document.cadastroForm.discip2.disabled = true;
		document.cadastroForm.discip3.disabled = true;

		document.cadastroForm.discip.checked = "";
		document.cadastroForm.discip2.checked = "";
		document.cadastroForm.discip3.checked = "";
	}
}
	
</script>
</head>
<body>
<p><b><font size="2" face="Verdana">Preencha todos os campos do formulário
abaixo para poder se cadastrar.</font></b></p>
<form name="cadastroForm" method="POST" action="?acao=cadastra">
  <p><font size="2" face="Verdana">Nome de usuario:<br>
  <input type="text" name="usuario" size="40"><br><br>
  Group:<br>
  <input type="radio" name="group" value="0" onchange="enable_disable_radio(this)"> User
  <input type="radio" name="group" value="1" onchange="enable_disable_radio(this)"> Moderator
  <input type="radio" name="group" value="2" onchange="enable_disable_radio(this)"> Admin<br><br>
  Disciplina:<br>
  <input disabled type="radio" name="discip" value="lp1"> Lp1
  <input disabled type="radio" name="discip2" value="lp2"> Lp2
  <input disabled type="radio" name="discip3" value="leda"> Leda<br><br>
  <input type="submit" value="Cadastrar"> </font></p>
</form>
</body>
</html>
<?php } ?>
