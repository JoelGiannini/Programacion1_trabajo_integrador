# 📘 ** Programacion 1 trabajo Integrador**

## 🚀 Instalación, configuración y correcciones realizadas

Este documento describe **todas las tareas, errores encontrados y soluciones aplicadas** para dejar el sitio *binarhitos* funcionando correctamente en un entorno local con Apache.

---

## 🌐 1. Descarga e instalación del proyecto

### ✔ Descargar el archivo  
Se descargó el archivo:

```
binarhitos.tar.gz
```

### ✔ Copiarlo a `/var/www/html` y descomprimirlo:

```bash
sudo cp binarhitos.tar.gz /var/www/html
cd /var/www/html
sudo tar -xvzf binarhitos.tar.gz
```

---

## 🔐 2. Permisos y propietario

```bash
sudo chmod -R 777 binarhitos/
sudo chown -R www-data:www-data binarhitos/
```

---

## 🖥️ 3. Ejecución inicial del sitio

Acceder a:

```
http://localhost/binarhitos/home.php
```

Se comenzaron a detectar errores que fueron corregidos.

---

# 🛠️ 4. Errores corregidos

## 4.1 Clase “Paginas” no encontrada

**Error:**

```
Class "Paginas" not found
```

**Solución:**  
Cambiar:

```php
$paginaWeb = new Paginas(...);
```

por:

```php
$paginaWeb = new Pagina("Hitos de la informática");
```

---

## 4.2 Propiedad inexistente `$anioo`

**Error:**

```
Undefined property: Pagina::$anioo
```

**Solución:**  
Cambiar `$anioo` por `$anio` en `footer.php`.

---

## 4.3 Archivo faltante formularioContacto.php

**Error:**

```
Failed opening required 'htmls/formularioContacto.php'
```

**Solución:**  
Crear el archivo faltante dentro del directorio `htmls/`.

---

## 4.4 Ruta incorrecta a nav.php

**Error:**

```
Failed opening required 'html/nav.php'
```

**Solución:**  
Modificar en `detalle.php`:

```php
require_once("html/nav.php");
```

por:

```php
require_once("htmls/nav.php");
```

---

## 4.5 Formulario de contacto funcionando

Se agregó un formulario con manejo de POST:

```php
<?php
echo "<h2>Formulario de Contacto</h2>";

echo '
<form action="#" method="post">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mensaje:</label><br>
    <textarea name="mensaje" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>
';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h3>Datos recibidos:</h3>";
    echo "Nombre: " . htmlspecialchars($_POST['nombre']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Mensaje: " . nl2br(htmlspecialchars($_POST['mensaje'])) . "<br>";
}
?>
```

---

# 🎉 5. Estado final

✔ Sitio funcionando  
✔ Errores corregidos  
✔ Formulario operativo  
✔ Archivos ubicados correctamente  

---

# 📄 6. Documentación lista para uso

Este README puede usarse para soporte, debugging y documentación futura.
