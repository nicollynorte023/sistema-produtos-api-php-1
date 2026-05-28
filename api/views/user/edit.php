<h2>Editar Usuário</h2>

<form method="POST">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text"
               name="nome"
               class="form-control"
               value="<?= $data['user']['nome'] ?>">
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text"
               name="cpf"
               class="form-control"
               value="<?= $data['user']['cpf'] ?>">
    </div>

    <div class="mb-3">
        <label>Número</label>
        <input type="text"
               name="numero"
               class="form-control"
               value="<?= $data['user']['numero'] ?>">
    </div>

    <div class="mb-3">
        <label>Tipo</label>

        <select name="type_user" class="form-control">

            <option value="<?= $data['user']['type_user'] ?>">
                <?= $data['user']['type_user'] ?>
            </option>

            <option value="Administrador">Administrador</option>
            <option value="Funcionário">Funcionário</option>
            <option value="Cliente">Cliente</option>

        </select>

    </div>

    <button class="btn btn-primary">
        Atualizar
    </button>

</form>