<?php include ("cabecalho.php");?>

<?php
$nome = $_GET{"nome"};
$preco = $_GET{"preco"};
$conexao = mysqli_connect ('localhost','root','','loja');


$query = "INSERT INTO produtos (nome, preco) values('{$nome}', {$preco})"; //produtos é o nome da tabela

if(mysqli_query($conexao, $query)) { ?>
    <p class="alert-success">Produto <?= $nome; ?>, com o preço de R$<?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
?> <p class="alert-danger">O produto <?= $nome; ?> não foi adicionado, coloque o preço para ser adicionado</p>

<?php }

?>

<?php include ("rodape.php"); ?>
