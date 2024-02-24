<?php
declare(strict_types=1);

namespace App\Test\exampleTest\application;

use App\exampleTest\application\NumberProcessor;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\DataProvider;

class NumberProcessorTest extends TestCase
{
    #[Test]
    #[Group('numbersProvider')]
    #[DataProvider('numbersProvider')]
    public function test_should_return_sum( array $numbers, int $expectedSum): void
    {
        //instanciamos la clase del caso de uso que queremos testear
        $numberProcessor = new NumberProcessor();
        //le pasamos los parametros para poder testear a nuestra caso de uso
        $result = $numberProcessor->sumIntegerNumbers(...$numbers);

        self::assertEquals($expectedSum, $result);
    }

    /**
     * este metodo lo usamos como proveedor de datos para los test
     * @return array[]
     */
    public static function numbersProvider(): array
    {
        return [
            [[1,2,3],6],//datos para el caso 1
            [[1,2,3,4,5],15],//datos para el caso 2
            [[1,2,3,-5],1]//datos para el caso 3
        ];
    }
}