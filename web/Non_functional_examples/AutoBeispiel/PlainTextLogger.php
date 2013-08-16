<?php
require_once("LoggerInterface.php");

class PlainTextLogger implements LoggerInterface
{
    private $logFilePath;

    /**
     * THis function expects a log message (string).
     * @param $message
     * @return mixed
     */
    public function log($message)
    {
        $this->magicWriteToFile($message);
    }

    public function setLogfilePath ($path) {
        $this->logFilePath = $path;

        return $this;
    }

    private function magicWriteToFile ($message) {
        // ...

        $logger = new PlainTextLogger();
        $logger->setLogfilePath('/tmp')->setLogfilePath('tmp')->setLogfilePath('tmp')->setLogfilePath('tmp')->setLogfilePath('tmp')->setLogfilePath('tmp')->setLogfilePath('tmp');

        $logger->setLogfilePath('/tmp')
            ->setLogfilePath('tmp')
            ->setLogfilePath('tmp')
            ->setLogfilePath('tmp')
            ->setLogfilePath('tmp')
            ->setLogfilePath('tmp');

        $logger->setLogfilePath('/tmp');
        $logger->setLogfilePath('/tmp');
        $logger->setLogfilePath('/tmp');
        $logger->setLogfilePath('/tmp');


        $beispielObjekt = new BeispielKlasse();
        $beispielObjekt->funktionFoo(23);
        $beispielObjekt->barBarBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);
        $beispielObjekt->funktionBar(23);

    }
}