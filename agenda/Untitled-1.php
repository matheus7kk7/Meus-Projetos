<form action="contatos.php" method="post">
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