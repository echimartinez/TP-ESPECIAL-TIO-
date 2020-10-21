<div>
    <div class="design">
        <h2>Insertar categorias</h2>
        <form action="InsertarCategoria" method="POST">
            <div>
                <label>Categoria</label>
                <input id="categoriaNueva" name="input_categoria">
                <small>Describa el producto</small>
            </div>
            <button type="submit">Agregar categoria</button>
        </form>
        <h4>Lista de categorias</h4>
        <div class="design">
            <table class="list">
                <tbody>
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    {foreach from=$categoria_listado item= categoria}
                        <tr>
                            <td>{$categoria->nombreCategoria}</td>
                            <td> <button type="button"><a href="EditarCategoria/{$categoria->id}">Editar</a></button></td>
                            <td> <button type="button"><a href="BorrarCategoria/{$categoria->id}">Borrar</a></button></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>