<?php
trait Logging
{
    public function logMessage(string $message):void
    {
        echo "Log: $message" . PHP_EOL;
    }
}