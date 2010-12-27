<?php
include_once 'Util.php';

if (!isset($_SESSION)) session_start();

protegerAllPage();

$LEVELPAGE = 1;

if($_SESSION['group'] < $LEVELPAGE) {
	echo("Voce nao tem nivel de acesso para essa pagina.");
	echo "<a href=deslogar.php><br>";
 	echo "Voltar";
 	echo "</a></font>";
 	exit;
}

if($_GET["acao"]=="cadastra"){
	if($_POST["group"] > $_SESSION['group']) {
		//alert
	}
 cadastraNoBD($_POST["usuario"],$_POST["group"], $_POST["disciplina"]);
}
else{
?>
<html>
<head>
<title>Cadastro</title>

<script type="text/javascript">

function verificaPermissoes (level) {
	if(document.cadastroForm.group.value > level) {
		alert("Você nao tem acesso para cadastrar esse tipo de usuario.");
		document.cadastroForm.group.focus();
		return;
	}
}

function enable_disable_radio(action) {
	
	if(action.value <= 1) {
		document.cadastroForm.disciplina.disabled = false;
		
	}
	else {
		
		document.cadastroForm.disciplina.disabled = true;
		
		document.cadastroForm.disciplina.checked = "";
	}
}
	
</script>
</head>
<body>
<p><b><font size="2" face="Verdana">Preencha todos os campos do formul·rio
abaixo para poder se cadastrar.</font></b></p>
<form name="cadastroForm" method="POST" action="?acao=cadastra">
  <p><font size="2" face="Verdana">Nome de usuario:<br>
  <input type="text" name="usuario" size="40"><br><br>
  Group:<br>
  <select name="group" size="1" onmouseout="enable_disable_radio(this)" >

                    <option value="2">Admin</option>

                    <option value="1">Moderator</option>

                    <option value="0">User</option>

  </select><br>
  Disciplina:<br>
  <select disabled name="disciplina" size="1" >

                    <option value="labprog1-t1">LabProg1-t1</option>

                    <option value="labprog1-t2">LabProg1-t2</option>

                    <option value="labprog2-t1">LabProg2-t1</option>

                    <option value="labprog2-t2">LabProg2-t2</option>

                    <option value="labeda" >LabEda</option>
	</select><br>
                    
<input type="submit" value="Cadastrar"> </font></p>
</form>
</body>
</html>
<?php } ?>
