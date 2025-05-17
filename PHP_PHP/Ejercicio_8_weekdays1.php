<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h1>introduccion de los arrays, metodo largo</h1>
        <p>Acontinuacion escribiremoa los arrays con el metodo largo</p>

        <h4>Los dias de la semana</h4>
        <p>
            <?php
            /*Este es un metodo largo para la creacion de arrays, de donde cada uno de los arreglos esta en una linea diferente,
            junto con su nvalor indice correspondiente */
            $dias[0] = "Lunes";
            $dias[1] = "Martes";
            $dias[2] = "Miercoles";
            $dias[3] = "Jueves";
            $dias[4] = "Viernes";
            $dias[5] = "Sabado";
            $dias[6] = "Domingo";
            //Mostrar dia miercoles
            echo "El dia de la semana es: " . $dias[5] . "<br>"; /* Mostrar el dia de la semana,
            recordar que con <br> se da un salto de linea */
             ?>
        </p>
    </body>

</html>

<!--NOTA: Aunque los arrays se ven mas adelante según el temario del curso, en el cuaderno de trabajo
vienen antes y no son dificiles de asimilar. Queda a discrecion ponerlos en orden o hacerlos despues del
no. 21 que son los ciclos y antes de entrar a los formularios.

1. declaracion de el arrays

- Muestr el metodo tradicional para poder crear un array en php (Metodo largo). 
- Cada elemento se designa individualmente con sus indice, en este caso los dias de la semana. -->

