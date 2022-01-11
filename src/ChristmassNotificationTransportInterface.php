<?php

namespace NewYear\ChristmassNotificationBundle;

interface ChristmassNotificationTransportInterface
{
    /**
     * Return a true if message send or string with error.
     *
     * @param string $message
     * @return bool|string
     */
    public function send(string $message): bool|string;

}