<h2>Detalhes do Usuário</h2>

<table class="table table-bordered">

    <tr>
        <th>ID</th>
        <td><?= $data['user']['id'] ?></td>
    </tr>

    <tr>
        <th>Nome</th>
        <td><?= $data['user']['nome'] ?></td>
    </tr>

    <tr>
        <th>CPF</th>
        <td><?= $data['user']['cpf'] ?></td>
    </tr>

    <tr>
        <th>Número</th>
        <td><?= $data['user']['numero'] ?></td>
    </tr>

    <tr>
        <th>Tipo</th>
        <td><?= $data['user']['type_user'] ?></td>
    </tr>

</table>

<a href="<?= BASE_URL ?>/user" class="btn btn-secondary">
    Voltar
</a>