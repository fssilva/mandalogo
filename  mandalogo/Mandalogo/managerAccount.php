<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style><?php
if (!isset($_SESSION)) session_start();

include_once 'newFunctions.php';
protegerAllPage();

echo "<a href = > Muda Senha</a><br>";
echo "<a href = >Mudar Resposta Secreta</a><br>";
echo "<a href = >Mudar E-Mail</a><br>";
echo "<a href = >Encerrar Conta</a><br><br>";
echo "<font face=verdana size=2>";
echo "<a href=javascript:history.back(1)>";
echo "Voltar";
echo "</a></font>";

?>