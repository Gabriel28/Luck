<?php

namespace Gabriel\Gerador;

class Lotofacil
{
    public static function geradorLotoFacil()
    {
        $numeros = [];
        $max_num = 15;
        for($i=0; $i < $max_num; $i++)
        {
            $num_aleatorio = rand(1, 25);
            array_push($numeros,$num_aleatorio);
            echo $num_aleatorio . PHP_EOL;
        }
    }
}