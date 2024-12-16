<?php

namespace App\Services;

class CustomFacade
{
    private string $data;
    public function setData(string $message): void
    {
        $this->data = $message;
    }
    public function getData(): string
    {
        return $this->data;
    }
}
