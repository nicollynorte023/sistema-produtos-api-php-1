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

            <h2>Lista</h2>

            <a href="javascript:history.back()"
               class="btn btn-secondary">
                Voltar
            </a>

        </div>

        <div class="card p-3">

            <table class="table table-hover align-middle mb-0">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($data as $item): ?>

                    <tr>

                        <td><?= $item['id'] ?></td>

                        <td><?= $item['nome'] ?></td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>