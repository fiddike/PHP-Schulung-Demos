<?php

interface LoggerInterface
{
    /**
     * THis function expects a log message (string).
     * @param $message
     * @return mixed
     */
    public function log ($message);
}