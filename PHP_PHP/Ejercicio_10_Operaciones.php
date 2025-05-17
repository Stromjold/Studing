<!--NOTA: Uno de los temas es ver como se realizan las operaciones en php, en este ejemplo se ven
cadenas y numeros y como se hacen las operaciones aritmeticas basicas, asi como los incrementos y
decrementos a las variables. Tambien vemos como se crea una variable en php.-->

<html>
    <head>
        <title>Ejercicio 10 - Operaciones</title> 
    <head>
    <body>
        <h1>Ejemplo de operaciones arimeticas en PHP</h1> 
        <p> para poder ver las operaciones vaya al codigo fuente</p>
        <?php
        $a =8;
        $b =3;
        // Operaciones aritméticas básicas
        echo $a + $b, "<br>";  // Suma los valores de $a(8) y $b(3), muestra 11
        echo $a - $b, "<br>";  // Resta $b de $a (8-3), muestra 5
        echo $a * $b, "<br>";  // Multiplica $a por $b (8*3), muestra 24
        echo $a / $b, "<br>";  // Divide $a entre $b (8/3), muestra aproximadamente 2.6666...
        echo $a % $b, "<br>";  // Obtiene el residuo de dividir $a entre $b (8%3), muestra 2
        echo $a ** $b, "<br>"; // Eleva $a a la potencia $b (8^3), muestra 512

        // Operadores de incremento/decremento
        echo $a++,"<br>";      // Muestra el valor de $a(8) y luego lo incrementa en 1
        echo $a--,"<br>";      // Muestra el valor de $a(9) y luego lo decrementa en 1

        // Operadores de asignación compuesta
        echo $a += $b,"<br>";  // Suma $b a $a y asigna el resultado a $a, muestra el nuevo valor
        echo $a -= $b,"<br>";  // Resta $b de $a y asigna el resultado a $a, muestra el nuevo valor
        echo $a *= $b,"<br>";  // Multiplica $a por $b y asigna el resultado a $a, muestra el nuevo valor
        echo $a /= $b,"<br>";  // Divide $a entre $b y asigna el resultado a $a, muestra el nuevo valor
        echo $a %= $b,"<br>";  // Obtiene el módulo y asigna el resultado a $a, muestra el nuevo valor
        echo $a **= $b,"<br>"; // Eleva $a a la potencia $b y asigna el resultado a $a, muestra el nuevo valor
        echo $a .= $b,"<br>";  // Concatena $b a $a como strings y asigna el resultado a $a

        // Operadores de comparación
        echo $a == $b,"<br>";  // Compara si $a es igual a $b (valor), devuelve 1(true) o nada(false)
        echo $a === $b,"<br>"; // Compara si $a es idéntico a $b (valor y tipo), devuelve 1(true) o nada(false)
        echo $a != $b,"<br>";  // Compara si $a es diferente de $b, devuelve 1(true) o nada(false)
        echo $a !== $b,"<br>"; // Compara si $a no es idéntico a $b (valor o tipo), devuelve 1(true) o nada(false)
        echo $a > $b,"<br>";   // Compara si $a es mayor que $b, devuelve 1(true) o nada(false)
        echo $a < $b,"<br>";   // Compara si $a es menor que $b, devuelve 1(true) o nada(false)
        echo $a >= $b,"<br>";  // Compara si $a es mayor o igual que $b, devuelve 1(true) o nada(false)
        echo $a <= $b,"<br>";  // Compara si $a es menor o igual que $b, devuelve 1(true) o nada(false)

        // Operadores lógicos
        echo $a and $b,"<br>"; // AND lógico - devuelve true si ambos son true
        echo $a or $b,"<br>";  // OR lógico - devuelve true si alguno es true
        echo $a xor $b,"<br>"; // XOR lógico - devuelve true si uno es true pero no ambos

        echo $a && $b,"<br>";//and
        echo $a || $b,"<br>";//or
        echo $a & $b,"<br>";//and
        echo $a | $b,"<br>";//or
        echo $a ^ $b,"<br>";//xor

        $a++; //incremento
        echo $a,"<br>";//incremento
        $b--;
        echo $b,"<br>";//decremento
         ?>

    </body>
</html>

<!--Notas importantes:

Cada echo va seguido de "<br>" para crear un salto de línea en HTML
Los operadores de comparación devuelven 1 para verdadero o nada para falso
Los valores de $a y $b van cambiando a lo largo del código debido a las operaciones
Los operadores and, or, xor tienen menor precedencia que &&, ||-->

