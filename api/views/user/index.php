<div class="sidebar">

    <h4>Sistema</h4>

    <nav>

        <a class="nav-link" href="<?= BASE_URL ?>">🏠 Dashboard</a>
        <a class="nav-link" href="<?= BASE_URL ?>/product">📦 Produtos</a>
        <a class="nav-link" href="<?= BASE_URL ?>/product/create">➕ Novo Produto</a>
        <a class="nav-link" href="<?= BASE_URL ?>/category">📁 Categorias</a>
        <a class="nav-link" href="<?= BASE_URL ?>/category/create">➕ Nova Categoria</a>
        <a class="nav-link" href="<?= BASE_URL ?>/user">👤 Usuários</a>
        <a class="nav-link" href="<?= BASE_URL ?>/user/create">➕ Novo Usuário</a>

    </nav>

</div>

<div class="main">

    <div class="content">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2>Usuários</h2>

            <a href="<?= BASE_URL ?>/user/create"
               class="btn btn-success">
                Novo Usuário
            </a>

        </div>

        <div class="card p-3">

            <table class="table table-hover align-middle mb-0">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Número</th>
                        <th>Tipo</th>
                        <th width="250">Ações</th>
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

                            <a href="<?= BASE_URL ?>/user/show/<?= $user['id'] ?>"
                               class="btn btn-info btn-sm">
                                Ver
                            </a>

                            <a href="<?= BASE_URL ?>/user/edit/<?= $user['id'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="<?= BASE_URL ?>/user/delete/<?= $user['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Deseja excluir este usuário?')">
                                Excluir
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>