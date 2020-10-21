{include file="header.tpl"}

<div>
    <div class="design">

        <h2>Edicion</h2>
        <form action="Editar" method="POST">
            <div>
                <label>Id del producto:</label>
                <input type="hidden" checked id="id_pro" name="input_idProducto" value="{$idProducto}">{$idProducto}
            </div>
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
            <label>Filtro por categoria</label>
            <select name="selectCategoria">
                {foreach from=$categoria_listado item=categoria}
                    <option>{$categoria->nombreCategoria}</option>
                {/foreach}
            </select>
            <button type="submit">Aplicar Cambios</button>
        </form>
    </div>
</div>
{include file="footer.tpl"}