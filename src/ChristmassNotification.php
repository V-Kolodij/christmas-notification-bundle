<?php

namespace NewYear\ChristmassNotificationBundle;


class ChristmassNotification
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var ChristmassNotificationTransportInterface[]
     */
    private $transports;

    /**
     * @param array $transports
     * @param string $message
     */
    public function __construct(iterable $transports, string $message = '')
    {
        $this->transports = $transports;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    public function sendNotification(): array
    {
        foreach ($this->transports as $transport) {
            $result[get_class($transport)] = $transport->send($this->getMessage());
        }
        return $result ?? [];
    }


}