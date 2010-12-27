<?php
include_once 'Util.php';

if (!isset($_SESSION)) 
	session_start();

// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '4rqu1v0S/'. retornaPastaDoUsuario($_SESSION["user"]) . '/';

// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 4; // 4Mb

// Array com as extensões permitidas
$_UP['extensoes'] = array('zip', 'rar', 'tar.gz', 'jpg' );

// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite maximo'; // limite da ferramenta
$_UP['erros'][2] = 'O arquivo no upload é maior do que o limite maximo'; // limite logico
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensoes: 'zip', 'rar', 'tar.gz' ";
echo '<br /><a href="index.php">Clique aqui para tentar Novamente.</a>';
}

// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado eh muito grande, envie arquivos de ateh 4Mb.";
echo '<br /><a href="index.php">Clique aqui para tentar Novamente.</a>';
}

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = time().'.zip';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'];
}

// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "Upload efetuado com sucesso!";
echo '<br /><a href="index.php">Clique aqui para enviar um novo arquivo.</a>';
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Nao foi possivel enviar o arquivo, ";
echo "provavelmente o tempo envio ja terminou. ";
echo "Entre em contato com o professor responsavel.";
echo '<br /><a href="index.php">Voltar.</a>';
}

}

?>
