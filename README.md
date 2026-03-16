# Desarrollo PHP Web

Repositorio creado para organizar y evidenciar mis proyectos de desarrollo web con PHP y MySQL.
Contenido organizado a partir de trabajo previo realizado durante mi formación como Ingeniero Civil Informático.

## Proyectos

### AppSalon
Aplicación web orientada a la gestión de servicios de un salón de belleza, desarrollada con PHP y MySQL.

- Conexión a base de datos MySQL con `mysqli_connect`
- Consultas SQL para obtener y estructurar datos (`SELECT * FROM servicios`)
- Función `obtenerServicios()` que retorna los resultados como arreglo asociativo
- Endpoint `servicios.php` que expone los datos al frontend en formato JSON (`json_encode`)
- Automatización de assets con Gulp y estilos con SCSS

### Introduccion PHP
Ejercicios y material práctico de introducción a PHP orientado a desarrollo web del lado del servidor.

Temas cubiertos:
- Variables, tipos de dato y operadores
- Métodos de strings y manejo de arreglos
- Arreglos asociativos
- Condicionales, loops y foreach
- Funciones con tipos estrictos (`declare(strict_types=1)`)
- Manejo de JSON (`json_encode`, `json_decode`)
- Uso de `require` e `include` para modularizar el código

## Nota
Este repositorio fue reorganizado a partir de la rama `PHP` de mi repositorio de estudio `Dise-o-web-full`, con el objetivo de dejar una evidencia más clara y enfocada de mi experiencia práctica con PHP.
