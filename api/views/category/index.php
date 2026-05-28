<h2>Categorias</h2>

<a href="<?= BASE_URL ?>/category/create" class="btn btn-success">
    Nova Categoria
</a>

<br><br>

<table class="table table-bordered">

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
                   class="btn btn-info">
                   Ver
                </a>

                <a href="<?= BASE_URL ?>/category/edit/<?= $category['id'] ?>"
                   class="btn btn-warning">
                   Editar
                </a>

                <a href="<?= BASE_URL ?>/category/delete/<?= $category['id'] ?>"
                   class="btn btn-danger"
                   onclick="return confirm('Deseja excluir?')">
                   Excluir
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </tbody>

</table>