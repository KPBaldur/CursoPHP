<?php

//Hola mundo en PHP
echo "Hola mundo en...... PHP";

/* Para poder realizar un salto de linea se debe agregar "\n"
al final de una cadena de texto
*/

/*Como crear una variable se inicia con un simbolo de 
Dolar o de peso "$"
*/

/* Se puede utilizar un punto "." para poder concatenar cadenas de 
texto*/


$my_string = "Esto es una cadena de texto";
$my_string = "Aqui cambio el valor de la cadena de texto";
echo $my_string . "\n";

/*
Para poder entregar la informacion sobre de que tipo es nuestra variable.
*/
echo gettype($my_string);

/*
Se puede cambiar de forma dinamica la variable asignada solo indicandole un
valor nuevo
*/
$my_string = 6; //Aqui se cambia la variable con el tipado dinamico
echo $my_string . "\n";
echo gettype($my_string) . "\n"; //Aqui podemos ver que el tipo de variable cambio a integer

$my_bool = true;
echo $my_bool . "\n";