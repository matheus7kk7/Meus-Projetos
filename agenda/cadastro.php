<?php include_once ("templates/header.php") ?>




<title>Cadastro</title>

<!--  Formulário de cadastro de dados -->
<form action="contatos.php" method="post">
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