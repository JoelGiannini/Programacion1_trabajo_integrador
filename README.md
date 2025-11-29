📘 ** Programacion 1 trabajo Integrador**

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

## 4.1 Error: Undefined variable $indic

**Archivo:** htmls/contenido_home.php

**Causa:** la variable $indic se usaba sin estar definida.

**Solución:** inicializar antes del loop:

$indic = 0;

## 4.2 Error: Undefined property: Pagina::$anioo

**Archivo:** htmls/footer.php

**Causa:** la clase Pagina usa $anio, no $anioo.

**Solución:**

Línea corregida:

De:

$paginaWeb->anioo


A:

$paginaWeb->anio

## 4.3 Error: Class "Paginas" not found

**Archivo:** home.php

**Causa:** se instanciaba una clase llamada “Paginas” que no existe.

**Solución:**

Cambio realizado:

De:

$paginaWeb = new Paginas(...);


A:

$paginaWeb = new Pagina("Hitos de la informática");

## 4.4 Error: archivo faltante formularioContacto.php

**Error:**

Failed opening required 'htmls/formularioContacto.php'


**Causa:** el archivo no existía en la carpeta htmls/.
**Solución:** crear el archivo:

htmls/formularioContacto.php


Además, se lo completó con un formulario funcional.


## 4.5 El formulario de contacto no hacía nada

Se agregó validación y visualización de datos enviados mediante POST.

Código final:

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

## 4.6 Error: ruta mal escrita hacia nav.php

**Archivo:** detalle.php

**Error:**

Failed opening required 'html/nav.php'


**Causa:** el directorio verdadero es htmls/ (con S).

**Solución:** cambiar:

require_once("html/nav.php");


por:

require_once("htmls/nav.php");

## 4.7 Confirmación de rutas correctas en todos los includes

Se revisaron los includes de todos los archivos:

header.php

nav.php

detalle.php

home.php

contacto.php

footer.php

javascripts.php

Corrigiendo rutas mal escritas como:

html/
htmls/
./htmls/


Todas quedaron estandarizadas como:

require_once("htmls/archivo.php");

## 4.8 El formulario no se mostraba por falta del archivo


Se confirmó que:

htmls/formularioContacto.php


no existía, por eso Apache tiraba error fatal.

Archivo creado → problema resuelto.



🎉 5. Estado final del sitio

✔ Sitio totalmente funcional
✔ Todos los includes corregidos
✔ Formulario 100% operativo
✔ Variables y clases revisadas
✔ Archivos faltantes creados
✔ Sin warnings ni fatal errors


---

# 📄 6. Documentación lista para uso

Este README puede usarse para soporte, debugging y documentación futura.
