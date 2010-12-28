<html>
<?php
$pagina = $_GET["pagina"];
?>

<head>
<!-- CSS style -->
<link rel="stylesheet" type="text/css" href="IndexEstilo.css" />
<!-- End CSS -->
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"></head>
<form method="POST" action="logar.php?pagina=<?=$pagina?>">
  <label>
  
  Desculpe, mas a página requisitada requer autorização.
  Faça login abaixo.

</label>
<div class="box">

            <h1>System admin : guardians</h1>
            <label>
               <span>Login</span>
               <input type="text" class="input_text" name="usuario" id="usuario"/>
            </label>
             <label>
               <span>Senha</span>
               <input type="password" class="input_text" name="senha" id="senha"/>
            </label>

        <input name="Submit" type="image" src="ButtonNext.png" height="40" width="40" class="button" value="Enviar" /> 
      

      
	</div>
</form>
<div class="box">
<h6><a href="esqueci.php">Esqueceu
  sua senha?</a></h6>
  </div>

</body>
</html>
