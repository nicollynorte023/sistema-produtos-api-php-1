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

            <h2>Produtos</h2>

            <a href="<?= BASE_URL ?>/product/create"
               class="btn btn-success">
                Novo Produto
            </a>

        </div>

        <div class="row g-4">

            <?php foreach($data['products'] as $product): ?>

                <div class="col-md-4">

                    <div class="card product-card h-100">

                        <img
                            src="https://picsum.photos/300/200"
                            class="card-img-top">

                        <div class="card-body">

                            <h5><?= $product['nome'] ?></h5>

                            <p class="text-muted">
                                <?= $product['descricao'] ?>
                            </p>

                            <p>
                                <strong>Preço:</strong>
                                R$ <?= number_format($product['preco'], 2, ',', '.') ?>
                            </p>

                            <p>
                                <strong>Estoque:</strong>
                                <?= $product['estoque'] ?>
                            </p>

                            <div class="d-flex gap-2">

                                <a href="<?= BASE_URL ?>/product/show/<?= $product['id'] ?>"
                                   class="btn btn-info btn-sm">
                                    Ver
                                </a>

                                <a href="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>"
                                   class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <a href="<?= BASE_URL ?>/product/delete/<?= $product['id'] ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Deseja excluir este produto?')">
                                    Excluir
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>