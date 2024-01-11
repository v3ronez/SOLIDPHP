<?php

namespace Src\Model;

interface Pontuavel
{
    public function recuperarPontuacao(): int;

    public function assistir(): void;
}
