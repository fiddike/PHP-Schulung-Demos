<?php

class Auto
{
    public $leistung;

    private $sitze = 5;

    private $farbe = "gelb";

    private $halter;

    public function __construct ()
    {
        $this->leistung = 234;
    }

    /**
     * @param string $farbe
     */
    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
    }

    /**
     * @return string
     */
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * @param mixed $leistung
     */
    public function setLeistung($leistung)
    {
        $this->leistung = $leistung;
    }

    /**
     * @return mixed
     */
    public function getLeistung()
    {
        return $this->leistung;
    }

    /**
     * @param int $sitze
     */
    public function setSitze($sitze)
    {
        if ($sitze > 100) {
            throw new Exception ('Ein Auto darf maximal 100 Sitze haben.');
        }

        if ($sitze > 50 ) {
            if ($this->getLeistung() < 300) {
                throw new Exception ('Bei mehr als 50 Sitzen sollte das Ding schon 300 PS haben.');
            }
        }

        $this->sitze = $sitze;
    }

    /**
     * @return int
     */
    public function getSitze()
    {
        return $this->sitze;
    }

    public function beschreibung () {
        $beschreibung = 'Dieses Auto hat hat ' . $this->getSitze() . ' Sitze';

        return $beschreibung;
    }
}