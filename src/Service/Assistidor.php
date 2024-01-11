<?php

namespace Alura\Solid\Service;

use Src\Model\Pontuavel;

class Assistidor
{
    public function assistir(Pontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
