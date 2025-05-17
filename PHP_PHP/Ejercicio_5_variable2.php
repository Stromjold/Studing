<html>
    <head>
        <title>
            Ejercicio 5    
        </title>
    </head>
    <body>
        <h1>Segundo ejemplo de variables usando el operador concatenacion.</h1>
        <p>
            <?php 
                $Name = "Miguel";
                echo "Hola <b>" .$Name."</b>,encantado de conocerte";
            ?>
        </p>
    </body>
</html>

<!--1. Estructura HTML básica
El código comienza con una estructura HTML que incluye:

Una página HTML básica
Un título "Ejercicio 5"
Un encabezado h1 que indica que es un ejemplo de variables con concatenación
2. Parte PHP
En la sección PHP, el código hace lo siguiente:

Este código:

Crea una variable $Name con el valor "Miguel"
Usa el operador de concatenación (.) para unir:
El texto "Hola "
La etiqueta HTML <b> para negrita
El valor de la variable $Name
La etiqueta de cierre </b>
El texto ",encantado de conocerte"
3. Resultado
Cuando se ejecuta este código en un navegador:

Mostrará un título grande que dice "Segundo ejemplo de variables usando el operador concatenacion."
Debajo mostrará el mensaje: "Hola Miguel, encantado de conocerte"
Donde "Miguel" aparecerá en negrita debido a las etiquetas <b>
Características importantes:
Usa concatenación de strings con el operador punto (.)
Combina HTML con PHP
Demuestra el uso básico de variables en PHP
Muestra cómo se puede insertar HTML dentro de una cadena PHP
Este es un ejemplo básico pero útil para entender cómo PHP puede generar contenido HTML dinámicamente y cómo se pueden usar las variables para personalizar el output.-->