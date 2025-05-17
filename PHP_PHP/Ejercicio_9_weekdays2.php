<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h1>Indroduccion de array, metodo corto</h1>
        <p>
            <?php
            /*Este es el metodo corto de los arrays, donde todo el array pude estar en una sola linea de codigo */

            $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

            //Mostrar dia miercoles
            echo "El dia de la semana es: " . $dias[2] . "<br>"; // Mostrar el dia de la semana
             ?>
        </p>
    </body>
</html>

<!--Las principales diferencias entre el Ejercicio 9 y el Ejercicio 8 son:

### 1. Método de declaración del array
- **Ejercicio 8** (método largo):
```php
$dias[0] = "Lunes";
$dias[1] = "Martes";
// ... etc
```

- **Ejercicio 9** (método corto):
```php
$dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
```

### 2. Estructura y formato
- **Ejercicio 8**: Tiene etiquetas adicionales como `<h4>` y más texto explicativo
- **Ejercicio 9**: Estructura más limpia y concisa

### 3. Errores de sintaxis
- **Ejercicio 8**: Tiene un error en la etiqueta HTML (`<htnl>`)
- **Ejercicio 9**: Tiene la etiqueta HTML correcta (`<html>`)

### 4. Acceso a elementos
- **Ejercicio 8**: Accede al día sábado (índice 5):
```php
echo "El dia de la semana es: " . $dias[5] . "<br>";
```
- **Ejercicio 9**: Accede al día miércoles (índice 2):
```php
echo "El dia de la semana es: " . $dias[2] . "<br>";
```

### 5. Comentarios
- **Ejercicio 8**: Comentarios más extensos y explicativos
- **Ejercicio 9**: Comentarios más concisos y directos

### 6. Ortografía
- Ambos tienen errores ortográficos en los títulos, pero son diferentes:
  - Ejercicio 8: "Acontinuacion escribiremoa"
  - Ejercicio 9: "Indroduccion"

El Ejercicio 9 representa una forma más moderna y eficiente de declarar arrays en PHP, aunque ambos códigos logran el mismo resultado final.-->