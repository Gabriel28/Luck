<?php

namespace Gabriel\Gerador;

class Jogos
{
    public static function tipoDeJogo(string $jogo)
    {
        if($jogo === 1){
            echo Quina::geradorQuina();
            return;
        } 

        echo MegaSena::geradorMega();
    }
}