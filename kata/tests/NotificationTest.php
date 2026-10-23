<?php

namespace Kata\Tests;

use Kata\Domain\Notification;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
    public function test(): void
    {
        $message = 'FizzBuzz';
        $notification = new Notification();

        $response = $notification->sendNotification($message);

        $this->assertTrue($response);
    }
}