<div class="sidebar">

    <h4>Sistema</h4>

    <nav>

        <a class="nav-link" href="<?= BASE_URL ?>">
            🏠 Dashboard
        </a>

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

        <h1 class="mb-4">
            Dashboard
        </h1>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h3>📦</h3>
                    <h5>Produtos</h5>

                    <a href="<?= BASE_URL ?>/product"
                       class="btn btn-primary mt-2">
                        Acessar
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h3>📁</h3>
                    <h5>Categorias</h5>

                    <a href="<?= BASE_URL ?>/category"
                       class="btn btn-success mt-2">
                        Acessar
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h3>👤</h3>
                    <h5>Usuários</h5>

                    <a href="<?= BASE_URL ?>/user"
                       class="btn btn-warning mt-2">
                        Acessar
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>