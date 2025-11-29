<?php
echo "<h2>Formulario de Contacto</h2>";

echo '
<form action="#" method="post">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Mensaje:</label><br>
    <textarea name="mensaje"></textarea><br><br>

    <button type="submit">Enviar</button>
</form>
';

//validacion formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h3>Datos recibidos:</h3>";
    echo "Nombre: " . htmlspecialchars($_POST['nombre']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Mensaje: " . nl2br(htmlspecialchars($_POST['mensaje'])) . "<br>";
}
?>
