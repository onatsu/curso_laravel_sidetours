<?php

namespace Kata\Tests;

use Kata\Domain\FizzBuzzCalculator;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    private FizzBuzzCalculator $fizzBuzzCalculator;
    private $notificator;
    private $calendar;

    protected function setUp(): void
    {
        $this->notificator = $this->createMock(\Kata\Domain\Notificator::class);
        $this->calendar = $this->createMock(\Kata\Domain\Calendar::class);
        $this->fizzBuzzCalculator = new FizzBuzzCalculator($this->notificator, $this->calendar);
    }

    public function testGivenANumberWhenCalculateShouldReturnNumber(): void
    {
        $number = 1;

        $response = $this->fizzBuzzCalculator->calculate($number);

        $this->assertEquals($number, $response);
    }

    public function testGivenAMultipleOfThreeShouldReturnFizz(): void
    {
        $number = 3;
        $expectedResponse = 'Fizz';

        $response = $this->fizzBuzzCalculator->calculate($number);

        $this->assertEquals($expectedResponse, $response);
    }

    public function testGivenAMultipleOfFiveShouldReturnBuzz(): void
    {
        $number = 5;
        $expectedResponse = 'Buzz';

        $response = $this->fizzBuzzCalculator->calculate($number);

        $this->assertEquals($expectedResponse, $response);
    }

    public function testGivenAMultipleOfThreeAndFiveShouldReturnFizzBuzz(): void
    {
        $number = 15;
        $expectedResponse = 'FizzBuzz';

        $response = $this->fizzBuzzCalculator->calculate($number);

        $this->assertEquals($expectedResponse, $response);
    }

    public function testGivenAMultipleOfThreeInXmasShouldReturnKuksa(): void
    {
        $this->calendar->expects($this->once())
            ->method('isXmas')
            ->willReturn(true);
        $number = 3;
        $expectedResponse = 'Kuksa!';

        $response = $this->fizzBuzzCalculator->calculate($number);

        $this->assertEquals($expectedResponse, $response);
    }

    public function testGivenAMultipleOfThreeAndFiveShouldSendNotification(): void
    {
        $number = 15;
        $expectedMessage = 'FizzBuzz';
        $this->notificator->expects($this->once())
            ->method('sendNotification')
            ->with($expectedMessage);

        $this->fizzBuzzCalculator->calculate($number);
    }
}