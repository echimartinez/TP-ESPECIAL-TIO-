{include file="header.tpl" }

<form action="verifyUser" method="post">


    <div class="container">
        <label for="usuario">Usuario</label>
        <input type="text" placeholder="Ingrese su Usuario" name="input_user" required>

        <label for="psw">Password</label>
        <input type="pass" placeholder="Ingrese su Contraseña" name="input_pass" required>

        <button type="submit">Login</button>
    </div>
</form>


{include file="footer.tpl" }