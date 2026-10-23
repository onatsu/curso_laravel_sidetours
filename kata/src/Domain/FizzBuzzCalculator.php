<?php

namespace Kata\Domain;

class FizzBuzzCalculator
{

    private Notificator $notificator;
    private Calendar $calendar;

    public function __construct(Notificator $notificator, Calendar $calendar)
    {
        $this->notificator = $notificator;
        $this->calendar = $calendar;
    }

    public function calculate(int $number)
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            $this->notificator->sendNotification('FizzBuzz');
            return 'FizzBuzz';
        }

        if ($number % 3 === 0 ) {
            if ($this->calendar->isXmas()) {
                return 'Kuksa!';
            }
            return 'Fizz';
        }

        if ($number % 5 === 0 ) {
            return 'Buzz';
        }

        return $number;
    }

    public function anotherMethod()
    {
        $this->notificator->sendNotification('Another method called');
    }
}