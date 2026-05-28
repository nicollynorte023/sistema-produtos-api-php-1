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

        <h2>Nova Categoria</h2>

        <form method="POST">

            <div class="card p-4">

                <div class="mb-3">

                    <label class="form-label">
                        Nome da Categoria
                    </label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        required>

                </div>

                <button
                    type="submit"
                    class="btn btn-success">
                    Salvar
                </button>

            </div>

        </form>

    </div>

</div>