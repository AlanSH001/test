<?php
require_once 'persona.php';
$persona1 =  new Persona('Alan Sebastian Hernandez Lopez', 90, 1.82);
echo(var_dump($persona1));
$persona1->saludar();


$peso = 90;
$estatura = 1.82;

$IMC = $peso/$estatura;
echo ('el IMC es : ' . $IMC);

if ($IMC < 18.5) 
    {
    echo ' está dentro de los valores correspondientes a “delgadez o bajo peso". ';
    }

    elseif ($IMC > 18.5 && $IMC < 24.9) 
     {
     echo ' está dentro de los valores "normales" o de peso saludable. ';
    } 

    elseif ($IMC > 25 && $IMC < 29.9) 
    {
        echo ' está dentro de los valores correspondientes a "sobrepeso". ';
    }
    
    elseif ($IMC > 30)
    {
        echo ' está dentro de los valores de "obesidad". ';
    }

    else {
        echo (' dato erroneo');
    }
