<?php

namespace Gabriel\Gerador;

class Quina
{
    public static function geradorQuina()
    {
        $numeros = [];
        $max_num = 5;

        for($i=0; $i < $max_num; $i++)
        {
            $num_aleatorio = mt_rand(1, 80).PHP_EOL;
            array_push($numeros,$num_aleatorio);
            echo $num_aleatorio;
        }
    }
}