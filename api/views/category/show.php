<h2>Editar Categoria</h2>

<form method="POST">

    <div class="mb-3">

        <label>Nome</label>

        <input
            type="text"
            name="nome"
            class="form-control"
            value="<?= $data['category']['nome'] ?>"
            required>

    </div>

    <button type="submit" class="btn btn-primary">
        Atualizar
    </button>

</form>