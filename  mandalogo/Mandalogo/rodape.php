<!DOCTYPE link PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!-- CSS style -->
<link rel="stylesheet" type="text/css" href="rodapeEstilo.css" />
<!-- End CSS -->
</head>
<body>
<?php
include_once 'Util.php';
//include("funcoes.php");

if (!isset($_SESSION)) session_start();

protegerAllPage();

if($_GET["acao"]=="logout"){
	header("Location: deslogar.php");
}

else {
	
 echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=rodape.php'>" // atualiza a cada 5s ?>
<h2><strong>Manager Files</strong></h2>
<br>
	<?
	echo ("<font face=verdana size=4>");
	echo ("Ola " . $_SESSION["user"] . ", Bem-Vindo ao UP - Guardians");
	echo ("</a></font>");
	echo ("<br><br> <a href=managerAccount.php> Manager Account</a>");
	echo ("<br> <a href=deslogar.php> Logout</a>");
	?>


	<?
	$dh = opendir(($dir = "./4rqu1v0S/".$_SESSION['diretorio']."/"));
	while (false !== ($filename = readdir($dh)))
	{
		?>
<table width="401" border="0" align="center" cellspacing="1"
	cellpadding="1">
	<tr>
	<?
	if (is_dir("$dir$filename") && ! (substr($filename,0,1) == '.' ))
	{
		?>
		<td width="15%">Diretorio</td>
		<td width="85%"><?="<a href=\"$dir$filename\">$filename</a>"?></td>
	</tr>
	<?
	}
	elseif (is_file("$dir$filename") && ! (substr($filename,0,1) == '.'))
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
</html>