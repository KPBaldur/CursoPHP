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

$my_string = "Volvemos a cambiar el valor de la variable" . "\n";

$my_float = 3.5;


$my_bool = true;
echo $my_bool . "\n";
$my_bool = false;
echo $my_bool . "\n";
echo gettype($my_bool);

echo "El valor de mi integer es $my_ y el de mi boolean es" . "\n";

//Constantes
const MY_CONSTAT = "Valor de la constante";
echo $MY_CONSTANT . "\n";

// Listas

$my_array = [$my_string, $my_bool];
echo gettype($my_list) . "\n";

//Pedir los datos especificos de un array
echo $my_list[0] . "\n";
echo $my_list[3] . "\n";

/*como agregar un dato al array, esto se ingresa asi 
"array_push(el array que le añadiremos, y los datos que ingresaremos)" */
array_push($my_array, $my_bool);

print_r($my_array);
//echo $my_list[7] . "\n"; //Esto dara un error porque no existe un elemento ubicado en el 7

//Diccionario

