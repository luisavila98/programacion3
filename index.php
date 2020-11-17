<?php
include "informacion.php";


$info = new informacion('luis', 'Avila', 22);
 
echo $info->getNombre(); // imprime el nombre 
echo $info->getApellido(); // imprime apellido
echo $info->getEdad(); // inprime edad


