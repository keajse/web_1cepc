<?php
    echo '<br>';
    echo "<h1>Paz y bien </h1>";
    echo '<br>';
    echo '<hr>';
      
   
    //Para declarar una variable se debe anteponer el signo pesos, siempre que se llame se debe utilizar el signo antes de la variable.

    //php asume el tipo de variable

    $numero = 26;
    echo $numero;
    echo '<H3>Hola mundo</H3>';
    //Asimila las etiquetas de html
    var_dump($numero);
    echo '<br><br>';
    echo '<hr>';

    //var_dump me dice que tipo de variable es, si es un string me dice la cantidad de caracteres.


    //como concatenar dos strings el más se cambia por un punto (.) para agregar espacio basta con comillas y espacio en medio de ellas (" ")

    
    echo '<h2>Concatenar</h2>';

    $palabra1 = "Paz y bien ";
    $palabra2 ="¿Cómo estás? ";

    echo $palabra1.$palabra2;
    echo '<br><br>';

    //echo $palabra2." ".$palabra2;

    $numero1 = 7.6;
    $numero2 = 4.8;

    //echo $numero1*$numero2;

    $total = $numero1*$numero2;

    echo $total;
    echo '<br><br>';
    echo '<hr>';

    //operadores logicos relacionales en php se pueden utilizar igual que en los otros programas

    // AND (y) = &&
    // OR (O) = ||

    //Operadores relacionales
    // >, >=, <, <=, !=, ==
    // Un solo igual asigna (=)
    // Doble igual compara (==)

    // Estructura if (condition) {
    //     # code...
    // }

    //Ejemplo: if($valor >3)
    //{echo "Es mayor"}

    echo '<h2>Condicional</h2>';
    echo '<br>';


    $valor = 5;

    if ($valor>3) {
        echo "<h3>$valor Es mayor que 3 </h3>";
        # code...
    }
    else
    {
        echo "<h3>$valor Es menor que 3 </h3>";
    }

    //El else es del último if que halla en el programa.

    echo '<br>';
    echo '<hr>';


    echo '<h2>Selector - Switch</h2>';
    echo '<br>';

    //El selector con el case tiene que ser del mismo tipo.

    $selector = "a";

    switch($selector){
        case 'a':
            echo "Caso a";
        break;

        //El break siempre va, de lo contrario se ejecutaría todos los casos.

        case 'b':
            echo "Caso b";
        break;

        default:
            echo "Otro caso";
        break;

    }

    echo '<hr>';

    echo '<h2>While</h2>';
    echo '<br>';

    $contador =0;

    while($contador < 5){
        $contador++;
    }
    echo '<br>';
    echo "contador: ". $contador;


    echo '<br><br>';
    echo '<hr>';

    echo '<h2>For</h2>';
    echo '<br>';

    for($i=0;$i<5;$i++){
        echo "<li>Valor: " . $i;
    }












?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <head>
        <h1>Index</h1>
    </head>

    <section>
    
    </section>
    
    <footer>
        Created by Keajse - 2020
    </footer>
</body>
</html> -->