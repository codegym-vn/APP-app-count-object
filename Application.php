<?php

class Application
{
    public static int $count = 0;

    public function __construct(private string $name)
    {
        self::$count++;
    }

    public function __toString(): string
    {
        return 'Application name: ' . $this->name;
    }
}