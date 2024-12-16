<?php

namespace App\Services;

class MessageInstance
{
    private array $messageBox;

    public function __construct()
    {
        $this->messageBox = [];
    }

    public function addMessage(string $message): void
    {
        $this->messageBox[] = $message;
    }

    public function printMessage(): string
    {
        return join(" ", $this->messageBox);
    }
}
