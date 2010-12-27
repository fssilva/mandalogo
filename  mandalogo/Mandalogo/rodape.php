<?php
include_once 'Util.php';
include("funcoes.php");

if (!isset($_SESSION)) session_start();

protegerAllPage();

if($_GET["acao"]=="logout"){
	logout();
}

else {

?>
<style type="text/css">
<!--
#apDiv1 {
	position: absolute;
	left: 237px;
	top: 112px;
	width: 608px;
	height: 246px;
	z-index: 1
}

a:link {
	color: #FFF;
	text-decoration: none;
}

a:visited {
	color: #FFF;
	text-decoration: none;
}

a:hover {
	color: #FFF;
	text-decoration: underline;
}

a:active {
	color: #FFF;
	text-decoration: none;
}

body {
	background-image: url();
	background-repeat: repeat-x;
	background-color: #000;
}

body,td,th {
	color: #999;
}
-->
</style>
<body>
	<? echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=rodape.php'>" // atualiza a cada 5s ?>
<h2><strong>Manager Files</strong></h2>
<br>
	<?
	echo ("<font face=verdana size=4>");
	echo ("Ola " . retornaLogin() . ", Bem-Vindo ao UP - Guardians");
	echo ("</a></font>");
	echo ("<br><br> <a href=managerAccount.php> Manager Account</a>");
	?>
</h2>
<form action="?acao=logout" method="post">
<p><input name="logout" type="submit" value="logout"></p>

</form>
	<?
	$dh = opendir(($dir = retornaPastaDoUsuario()));
	//lerDiretorio( retornaPastaDoGerente());
	while (false !== ($filename = readdir($dh)))
	{
		?>
<table width="401" border="0" a align="center" cellspacing="1"
	cellpadding="1">
	<tr>
	<?
	if (is_dir("$dir$filename") && ! ($filename == '.' || $filename == '..'))
	{
		?>
		<td width="15%">Diretorio</td>
		<td width="85%"><?="<a href=\"$dir$filename\">$filename</a>"?></td>
	</tr>
	<?
	}
	elseif (is_file("$dir$filename") && ! ($filename == '.' || $filename == '..'))
	{
		?>
	<tr>
		<td width="15%">Arquivo</td>
		<td width="85%"><?="<a href=\"$dir$filename\">$filename</a>"?></td>
		<?
	}
	?>
	</tr>

</table>

	<? } ?>
<a href="">Download all files</a>
</body>
<? } ?>