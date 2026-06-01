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

        <h2 class="mb-4">Editar Categoria</h2>

        <div class="card p-4">

            <form method="POST">

                <div class="mb-3">

                    <label class="form-label">
                        Nome da Categoria
                    </label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        value="<?= $data['category']['nome'] ?>"
                        required>

                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary">
                        Atualizar
                    </button>

                    <a href="<?= BASE_URL ?>/category"
                       class="btn btn-secondary">
                        Voltar
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>