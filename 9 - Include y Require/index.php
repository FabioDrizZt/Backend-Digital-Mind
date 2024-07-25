<?php include './views/head.php' ?>
<?php include_once './views/head.php' ?>
<h1>Mi sitio web</h1>
<form action='./pages/recepcion.php' method="get">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
    <button type="submit">Enviar</button>
</form>

<?php require './views/footer.php' ?>
<?php require_once './views/footer.php' ?>