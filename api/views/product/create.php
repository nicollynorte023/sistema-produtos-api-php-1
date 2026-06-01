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

        <h2 class="mb-4">Novo Produto</h2>

        <div class="card p-4">

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Nome</label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>

                    <textarea
                        name="descricao"
                        class="form-control"
                        rows="4"
                        required></textarea>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">Preço</label>

                        <input
                            type="number"
                            step="0.01"
                            name="preco"
                            class="form-control"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">Estoque</label>

                        <input
                            type="number"
                            name="estoque"
                            class="form-control"
                            required>

                    </div>

                </div>

                <div class="mb-4">

                    <label class="form-label">Categoria</label>

                    <select
                        name="categoria_id"
                        class="form-select"
                        required>

                        <?php foreach($data['categories'] as $category): ?>

                            <option value="<?= $category['id'] ?>">
                                <?= $category['nome'] ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-success">
                        Salvar Produto
                    </button>

                    <a href="<?= BASE_URL ?>/product"
                       class="btn btn-secondary">
                        Voltar
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>