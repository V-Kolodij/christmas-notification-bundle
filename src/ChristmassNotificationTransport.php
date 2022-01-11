<?php

namespace NewYear\ChristmassNotificationBundle;

class ChristmassNotificationTransport implements ChristmassNotificationTransportInterface
{
    public function send(string $message): bool|string
    {
        return (bool) $message;
    }

}