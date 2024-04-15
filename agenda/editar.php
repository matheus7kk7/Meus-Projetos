<?php include_once ("templates/header.php") ?>

<title>Editar</title>

<?php
// Verifica se os dados do formulário foram enviados
if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['preco'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Prepara a consulta SQL
    $stmt = $conexao->prepare("UPDATE itens SET nome=?, preco=? WHERE id=?");
    if (!$stmt) {
        echo "Erro ao preparar a consulta: " . $conexao->error;
    }

    // Vincula os parâmetros e executa a consulta
    $stmt->bind_param("sii", $nome, $preco, $id);
    $result = $stmt->execute();
    if (!$result) {
        echo "Erro ao executar a consulta: " . $stmt->error;
    } else {
        echo "Atualização realizada com sucesso!";
    }

    // Fecha a consulta
    $stmt->close();

} else {
    echo "Erro: Todos os campos devem ser preenchidos.";
}
?>
<form action="" method="post">
    <div class="mb-3">
        <label for="nameInput" class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="nameInput" value="<?= $nome ?>" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="precoInput" class="form-label">Preço</label>
        <input type="text" class="form-control" id="precoInput" value="<?= $preco ?>" name="preco" required>
    </div>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="Enviar">

</form>




<?php include_once ("templates/footer.php") ?>