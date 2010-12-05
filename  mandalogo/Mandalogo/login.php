<?php
$pagina = $_GET["pagina"];
?>
<html>
<head>
<style type="text/css">
*{ margin:0; padding:0;}
body{
	font:100% normal Arial, Helvetica, sans-serif;
	background:#161712;
	background-color: #000;	
}
form,input,select,textarea{margin:0; padding:0; color:#ffffff;}

div.box {
margin:0 auto;
width:400px;
position:relative;
top:50px;
border:1px solid #262626;
}

div.box h1 {
color:#ffffff;
font-size:18px;
text-transform:uppercase;
padding:5px 0 5px 5px;
border-bottom:1px solid #161712;
border-top:1px solid #161712;
}

div.box label {
width:100%;
display: block;
background:#1C1C1C;
border-top:1px solid #262626;
border-bottom:1px solid #161712;
padding:10px 0 10px 0;
}

div.box label span {
display: block;
color:#bbbbbb;
font-size:12px;
float:left;
width:75px;
text-align:right;
padding:5px 20px 0 0;
}

div.box .input_text {
padding:10px 10px;
width:206px;
background:#262626;
border-bottom: 1px double #171717;
border-top: 1px double #171717;
border-left:1px double #333333;
border-right:1px double #333333;
}


div.box .button
{
margin:0 0 10px 0;
padding:4px 7px;
background:#CCAA00;
border:0px;
position: relative;
top:10px;
left:96px;
width:100px;
}
a:link {
	text-decoration: none;
	color: #FFF;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}

-->
</style>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"></head>
<form method="POST" action="logar.php?pagina=<?=$pagina?>">
  <label>
  <h6>
  Desculpe, mas a página requisitada requer autorização.
  Faça login abaixo.
</h6>
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

        <input name="Submit" type="submit" class="button" value="Entrar" /> 
      

      
</div>
</form>
<div class="box">
<a href="index.php"><font face="Verdana" size="1">Inicio</a>
<br><a href="esqueci.php"><font face="Verdana" size="1">Esqueceu
  sua senha?</font></a>
  </div>


</body>
</html>
