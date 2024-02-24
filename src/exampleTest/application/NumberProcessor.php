<?php
declare(strict_types=1);

namespace App\exampleTest\application;

final class NumberProcessor
{
    //usamos eloperador '...' para indicar que el
    //numero de parametros que puede recibir el
    //metodo es variable
    public function sumIntegerNumbers(int ...$numbers): int
    {
        return array_sum($numbers);
    }
}