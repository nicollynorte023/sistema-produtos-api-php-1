<h2>Novo Usuário</h2>

<form method="POST">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Número</label>
        <input type="text" name="numero" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tipo de Usuário</label>

        <select name="type_user" class="form-control">

            <option value="Administrador">Administrador</option>
            <option value="Funcionário">Funcionário</option>
            <option value="Cliente">Cliente</option>

        </select>

    </div>

    <button type="submit" class="btn btn-success">
        Salvar
    </button>

</form>