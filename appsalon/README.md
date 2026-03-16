# AppSalon

Aplicación web para la gestión de servicios de un salón de belleza, desarrollada con PHP y MySQL.

## Stack utilizado
- PHP (backend)
- MySQL con `mysqli`
- JSON para exposición de datos al frontend
- HTML5, SCSS, Gulp (frontend)

## Estructura

```
appsalon/
├── include/
│   ├── database.php     # Conexión a base de datos MySQL
│   └── funciones.php    # Lógica para obtener servicios desde la BD
├── servicios.php        # Endpoint que expone datos como JSON
└── index.html           # Vista principal
```

## Funcionalidades implementadas

- Conexión a base de datos MySQL mediante `mysqli_connect`
- Consulta SQL `SELECT * FROM servicios` para obtener los servicios registrados
- Función `obtenerServicios()` que itera los resultados con `mysqli_fetch_assoc` y retorna un arreglo estructurado
- Endpoint PHP que convierte el arreglo a JSON con `json_encode` para consumo del frontend
