<?php

namespace Alura\Solid\Service;

use Src\Model\Pontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
