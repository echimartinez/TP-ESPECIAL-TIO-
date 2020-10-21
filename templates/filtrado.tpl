{include file="header.tpl"}

<div>
    <div class="design">
        <h2>Agregar Productos</h2>
        <form action="Insertar" method="POST">
            <div>
                <label>Producto</label>
                <input id="producto" name="input_descripcion">
                <small>Describa el producto</small>
            </div>
            <div>
                <label>Color</label>
                <input id="color" name="input_color">
                <small>Defina el color</small>
            </div>
            <div>
                <label>Precio</label>
                <input id="precio" name="input_precio">
                <small>Inserte precio</small>
            </div>
            <button type="submit">Generar producto</button>
        </form>
        <h4>Lista de productos</h4>
        <form action="Select" method="GET">
            <label>Seleccion de categoria</label>
            <select name="selectCategoria">
                <option>Todas</option>
                {foreach from=$categoria_listado item=categoria}
                    <option>{$categoria->nombreCategoria}</option>
                {/foreach}
            </select>
            <label>Filtro por categoria</label>
            <button type="submit">Aplicar filtro</button>
            <br>

        </form>
        <div class="design">
            <table class="list">
                <tbody>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Descripcion</th>
                            <th>Color</th>
                            <th>Precio</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    {foreach from=$producto_listado item= producto}
                        <tr>
                            <td> <button type="button"><a href="Ver/{$producto->id}">Ampliar</a></button></td>
                            <td>{$producto->descripcion}</td>
                            <td>{$producto->color}</td>
                            <td>{$producto->precio}</td>
                            <td> <button type="button"><a href="Editar/{$producto->id}">Editar</a></button></td>
                            <td> <button type="button"><a href="Borrar/{$producto->id}">Borrar</a></button></td>
                        </tr>
                    {/foreach}
                </tbody>

            </table>
        </div>
    </div>
</div>
{include file="tablaCategorias.tpl"}
{include file="footer.tpl"}