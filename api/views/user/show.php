<div class="sidebar">

    <h4>Sistema</h4>

    <nav>

        <a class="nav-link" href="<?= BASE_URL ?>">🏠 Dashboard</a>

        <a class="nav-link" href="<?= BASE_URL ?>/product">
            📦 Produtos
        </a>

        <a class="nav-link" href="<?= BASE_URL ?>/product/create">
            ➕ Novo Produto
        </a>

        <a class="nav-link" href="<?= BASE_URL ?>/category">
            📁 Categorias
        </a>

        <a class="nav-link" href="<?= BASE_URL ?>/category/create">
            ➕ Nova Categoria
        </a>

        <a class="nav-link" href="<?= BASE_URL ?>/user">
            👤 Usuários
        </a>

        <a class="nav-link" href="<?= BASE_URL ?>/user/create">
            ➕ Novo Usuário
        </a>

    </nav>

</div>

<div class="main">

    <div class="content">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2>Detalhes do Usuário</h2>

            <a href="<?= BASE_URL ?>/user"
               class="btn btn-secondary">
                Voltar
            </a>

        </div>

        <div class="card p-4">

            <table class="table table-bordered align-middle mb-0">

                <tr>
                    <th width="200">ID</th>
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
                    <th>Tipo de Usuário</th>
                    <td><?= $data['user']['type_user'] ?></td>
                </tr>

            </table>

            <div class="mt-4">

                <a href="<?= BASE_URL ?>/user/edit/<?= $data['user']['id'] ?>"
                   class="btn btn-warning">
                    Editar
                </a>

                <a href="<?= BASE_URL ?>/user/delete/<?= $data['user']['id'] ?>"
                   class="btn btn-danger"
                   onclick="return confirm('Deseja excluir este usuário?')">
                    Excluir
                </a>

            </div>

        </div>

    </div>

</div>