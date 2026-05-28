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

        <h2 class="mb-4">Novo Usuário</h2>

        <div class="card p-4">

            <form method="POST">

                <div class="mb-3">

                    <label class="form-label">
                        Nome
                    </label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        CPF
                    </label>

                    <input
                        type="text"
                        name="cpf"
                        class="form-control"
                        maxlength="14"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Número
                    </label>

                    <input
                        type="text"
                        name="numero"
                        class="form-control"
                        required>

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Tipo de Usuário
                    </label>

                    <select
                        name="type_user"
                        class="form-select">

                        <option value="Administrador">
                            Administrador
                        </option>

                        <option value="Funcionário">
                            Funcionário
                        </option>

                        <option value="Cliente">
                            Cliente
                        </option>

                    </select>

                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-success">
                        Salvar Usuário
                    </button>

                    <a href="<?= BASE_URL ?>/user"
                       class="btn btn-secondary">
                        Voltar
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>