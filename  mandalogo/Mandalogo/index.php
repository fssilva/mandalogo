<html>
<?php
include_once 'Util.php';

if (!isset($_SESSION)) 
	session_start();

protegerAllPage();
?>


<head>
<!-- CSS style -->
<link rel="stylesheet" type="text/css" href="indexEstilo.css" />
<!-- End CSS -->

<!-- javaScript -->
<script type="text/javascript">

function verificaFormulario() {
	
	if(document.formUp.arquivo.value == "") {
		alert("Selecione um arquivo.");
		return false;
	}
	
	var acept = ["rar", "zip", "jpg"];
	var file = document.formUp.arquivo.value; 
	var exten = file.split(".")[1];

	for ( var int = 0; int < acept.length; int++) {
		if(exten != acept[i] ) {
			alert("Formato de arquivo nao permitido.");
			return false;
		}
	}
	
	return true;
}


</script>
<!-- End javaScript -->

</head>
<body>

<div class="box">
<form name="formUp" method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return verificaFormulario()">
<?php echo "Ola ".$_SESSION['user'].", bem-vindo"?>
<label>
	<span>Arquivo</span>
    <input type="file" name="arquivo" class="file"  />
</label>
<input name="Submit" type="image" src="ButtonNext.png" height="40" width="40" class="button" value="Enviar" />
</form>

</div>
<div class="box">
<h6><a href="rodape.php">Manager Files </a> 
<h10>   |   </h10><a href="cadastro.php">Register</a>
<h10>   |   </h10><a href="deslogar.php">Logout</a></h6>
</div>
</body>
</html>
