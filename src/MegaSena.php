<?php

namespace Gabriel\Gerador;

class MegaSena
{
    public static function geradorMega()
    {
        $numeros = [];
        $max_num = 6;

        for($i=0; $i < $max_num; $i++)
        {
            $num_aleatorio = mt_rand(1, 60);
            array_push($numeros,$num_aleatorio);
            echo $num_aleatorio . PHP_EOL;
        }
    }
}