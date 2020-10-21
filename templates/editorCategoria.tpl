{include file="header.tpl"}

<div>
    <div class="design">

        <h2>Edicion</h2>
        <form action="ModificarCategoria" method="POST">
            <div>
                <label>Id Categoria:</label>
                <input type="hidden" checked id="id_cat" name="input_idCategoria" value="{$idCategoria}">{$idCategoria}
            </div>
            <div>
                <label>Categoria</label>
                <input id="categoria" name="input_nombreCategoria">
                <small>Describa categoria</small>
            </div>
            <button type="submit">Aplicar Cambios</button>
        </form>
    </div>
</div>
{include file="footer.tpl"}