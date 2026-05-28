<h2>Usuários</h2>

<a href="<?= BASE_URL ?>/user/create" class="btn btn-success">
    Novo Usuário
</a>

<br><br>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Número</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($data['users'] as $user): ?>

        <tr>

            <td><?= $user['id'] ?></td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['cpf'] ?></td>
            <td><?= $user['numero'] ?></td>
            <td><?= $user['type_user'] ?></td>

            <td>

                <a href="<?= BASE_URL ?>/user/show/<?= $user['id'] ?>" class="btn btn-info">
                    Ver
                </a>

                <a href="<?= BASE_URL ?>/user/edit/<?= $user['id'] ?>" class="btn btn-warning">
                    Editar
                </a>

                <a href="<?= BASE_URL ?>/user/delete/<?= $user['id'] ?>" class="btn btn-danger">
                    Excluir
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>