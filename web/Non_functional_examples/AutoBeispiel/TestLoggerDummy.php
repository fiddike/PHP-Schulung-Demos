<?php


class TestLoggerDummy implements LoggerInterface
{

    /**
     * THis function expects a log message (string).
     * @param $message
     * @return mixed
     */
    public function log($message)
    {
        // do nothing, thi is a dummy for tesing
    }
}