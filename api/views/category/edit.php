<h1>Editar Categoria</h1>

<form method="POST">

  <input 
    type="text" 
    Categoria="categoria"
    value="<?= $category['categoria'] ?>"
  >

  <input 
    type="number"
    id="id"
    value="<?= $id['id'] ?>"
  >

  <button type="submit">
    Salvar
  </button>

</form>