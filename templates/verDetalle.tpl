{include file="header.tpl"}

<h2>Ampliado</h2>
<table class="design">
    <tbody>
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Precio</th>
                <th>ID</th>
                <th>categoria</th>
            </tr>
        </thead>

        <tr>

            <td>{$producto_detalle->descripcion}</td>
            <td>{$producto_detalle->color}</td>
            <td>{$producto_detalle->precio}</td>
            <td>{$producto_detalle->id}</td>
            <td>{$producto_detalle->categoria}</td>

        </tr>

    </tbody>
</table>
{include file="footer.tpl"}