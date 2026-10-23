<?php

namespace Kata\Domain;

interface Notificator
{
    public function sendNotification(string $message);
}