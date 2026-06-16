# JR Services SpA — Sitio Web

## Estructura de archivos

```
jrservices/
├── index.php       # Página principal (datos + HTML)
├── style.css       # Todos los estilos
├── main.js         # Interactividad (navbar, animaciones, formulario)
└── README.md       # Este archivo
```

## Cómo editar contenido

Todos los textos, datos de contacto y listas de servicios están al inicio de `index.php` como arrays PHP. No es necesario tocar el HTML para actualizar la información.

```php
$empresa   // Nombre, teléfonos, email, dirección
$vision    // Texto de visión
$mision    // Texto de misión
$seguridad // Lista de servicios de seguridad
// ...etc
```

## Cómo agregar secciones

1. Agregar los datos como array PHP al inicio de `index.php`
2. Crear el bloque HTML con `<section class="section nueva-section" id="nueva">`
3. Agregar los estilos correspondientes en `style.css`
4. Agregar el enlace en el `<nav>` del navbar

## Formulario de contacto

Actualmente el formulario simula el envío (JavaScript). Para activarlo de verdad:

1. Crear `send_mail.php` que reciba `POST` con los campos `nombre`, `email`, `servicio`, `mensaje`
2. En `main.js`, reemplazar el `setTimeout` por un `fetch('send_mail.php', { method: 'POST', body: new FormData(form) })`

## Requisitos

- PHP 7.4 o superior
- Servidor web (Apache, Nginx, o PHP built-in: `php -S localhost:8000`)
- Conexión a internet para cargar las fuentes de Google Fonts

## Escalabilidad sugerida

- Convertir cada sección en un include separado (`/includes/seccion-seguridad.php`)
- Mover los arrays de datos a un archivo `config/datos.php`
- Agregar una base de datos si los servicios necesitan actualizarse frecuentemente
