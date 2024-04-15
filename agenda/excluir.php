<?php include_once ("templates/header.php") ?>
<title>Excluir</title>

<?php
$id = $_POST['id']; //valor a ser inseridos na query


$stmt = $conexao->prepare("DELETE FROM  itens where id =? ");//preparando a query com um valor placheholder
$stmt->bind_param("i", $id);

$stmt->execute();
$stmt->close();

header('location:contatos.php');
exit; // Encerra a execução do script para garantir e redireciona para o local especificado
?>

<?php include_once ("templates/footer.php") ?>