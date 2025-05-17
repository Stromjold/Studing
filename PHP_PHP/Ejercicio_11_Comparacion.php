<!--NOTA: Sobre el mismo punto de operaciones, pero ahora de comparacion con variables numericas y
observar el resultado en tiempo de ejecucion.-->
<html>
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h1>Ejemplo de operaciones de comparacion en php</h1>
        <?php
        $a = 8;
        $b = 3;
        $c = 3;
        echo $a == $b, "<br>";  // Compara si $a es igual a $b (valor), devuelve 1(true) o nada(false)
        echo $a != $b, "<br>";  // Compara si $a es diferente de $b, devuelve 1(true) o nada(false)
        echo $a < $b, "<br>";   // Compara si $a es menor que $b, devuelve 1(true) o nada(false)
        echo $a > $b, "<br>";   // Compara si $a es mayor que $b, devuelve 1(true) o nada(false)
        echo $a >= $c, "<br>";  // Compara si $a es mayor o igual que $c, devuelve 1(true) o nada(false)
        echo $a <= $c, "<br>";  // Compara si $a es menor o igual que $c, devuelve 1(true) o nada(false)
        
        ?>
    </body>
</html>

<!--Características importantes:
Los operadores de comparación devuelven valores booleanos
En PHP, cuando se hace echo de un booleano:
true se muestra como "1"
false se muestra como vacío (no se imprime nada)
Cada resultado se separa con un "<br>" para crear un salto de línea en HTML
Las comparaciones son numéricas ya que las variables contienen valores numéricos-->