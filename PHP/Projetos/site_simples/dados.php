<?php 

$nome= $_POST['tnome'];
$email= $_POST['tmail'];
$assunto = $_POST['tassunto'];
$mensagem = $_POST['tmsg'];

echo "<h1> Abaixo seguem os dados que você enviou</h1> <br/>";

echo "Nome : $nome <br/>" ;
echo "E-mail : $email <br/>";
echo "Assunto : $assunto <br/>";
echo "Mensagem : $mensagem <br/>";

?>