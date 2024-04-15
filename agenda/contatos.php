<?php include_once ("templates/header.php"); ?>

<?php
$result = $conexao->query("SELECT * FROM itens  ORDER BY id ASC");
//Query de listagem dos dados Obs::Querys de seleção não precisam ser preparadas , Ordenadas pela coluna id em ordem crescente
if (isset($_POST['nome']) && isset($_POST['preco'])) {
  //Verifica se as colunas existem e foram preenchidas na página de cadastro e estão preenchidos
  $nome = $_POST['nome']; //$nome recebe o array '$_POST['nome'] via post
  $preco = $_POST['preco'];//$preco recebe o array'$_POST['preco'] via post

}
?>



<title>Contatos</title>
<main>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">preco</th>
        <th scope="col">actions</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

      <?php while ($itens = $result->fetch_assoc()): ?> <!--
      O método fetch_assoc() é usado para recuperar uma linha de resultado como um array associativo -->
        <tr>
          <th scope="row"><?= $itens['id'] ?> </th>
          <td><?= $itens['nome']; ?></td>
          <td><?= $itens['preco']; ?>

          <td>
            <form action="excluir.php" method="post">
              <input type="hidden" name="id" value="<?= $itens['id'] ?>">
              <input type="submit" value="excluir">
            </form>
          </td>
          <td>

            <form action="editar.php" method="post">
              <input type="hidden" name="id" value="<?= $itens['id'] ?>">
              <input type="hidden" name="nome" value="<?= $itens['nome'] ?>">
              <input type="hidden" name="preco" value="<?= $itens['preco'] ?>">

              <input type="submit" value="editar">
            </form>
          </td>
          </td>

        </tr>


      <?php endwhile; ?>


    </tbody>
  </table>
</main>

<?php include_once ("templates/footer.php") ?>