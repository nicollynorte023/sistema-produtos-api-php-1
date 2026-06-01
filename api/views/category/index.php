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

            <h2>Categorias</h2>

            <a href="<?= BASE_URL ?>/category/create"
               class="btn btn-success">
                Nova Categoria
            </a>

        </div>

        <div class="card p-3">

            <table class="table table-hover align-middle mb-0">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th width="250">Ações</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach($data['categories'] as $category): ?>

                    <tr>

                        <td><?= $category['id'] ?></td>

                        <td><?= $category['nome'] ?></td>

                        <td>

                            <a href="<?= BASE_URL ?>/category/show/<?= $category['id'] ?>"
                               class="btn btn-info btn-sm">
                               Ver
                            </a>

                            <a href="<?= BASE_URL ?>/category/edit/<?= $category['id'] ?>"
                               class="btn btn-warning btn-sm">
                               Editar
                            </a>

                            <a href="<?= BASE_URL ?>/category/delete/<?= $category['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Deseja excluir?')">
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