<?php

namespace Kata\Domain;

class Notification implements Notificator
{
    public function sendNotification(string $message)
    {
        return true;
    }
}