<?php include_once ("templates/header.php") ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  /*Essa linha de código está verificando se o método de solicitação usado para acessar a página é POST.
   Isso é útil quando você deseja executar uma determinada lógica 
  apenas quando o formulário é enviado via método POST. */

  if (isset($_POST['nome']) && isset($_POST['preco'])) {

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

  }

}
if (!empty($nome) && !empty($preco)) {

  $stmt = $conexao->prepare(" INSERT INTO itens (nome,preco) Values (
    ?,  ?)");//preparando a query
  $stmt->bind_param("ss", $nome, $preco);


  $stmt->execute();
  $stmt->close();

} else {
  echo "Insira os dados obrigatórios do formulario ";
}
?>

<title>Cadastro</title>

<!--  Formulário de cadastro de dados -->
<form action="#" method="post">
  <div class="mb-3">
    <label for="nameInput" class="form-label">Nome completo</label>
    <input type="text" class="form-control" id="nameInput" placeholder="Insira seu nome" name="nome" required>
  </div>
  <div class="mb-3">
    <label for="precoInput" class="form-label">Preço </label>
    <input type="text" class="form-control" id="precoInput" placeholder="Insira valor do produto" name="preco" required>
  </div>
  <div class="mb-3">
    <input type="submit" value="enviar">
  </div>


</form>



<?php include_once ("templates/footer.php");