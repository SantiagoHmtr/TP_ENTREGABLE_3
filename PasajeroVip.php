<?php
include_once("Pasajero.php");
Class PasajeroVip extends Pasajero{
    private $numFrecuente;
    private $cantMillas;
    public function __construct($nombre, $apellido, $numDocumento, $numTelefono, $numAsiento, $numTicket, $numFrecuente, $cantMillas )
    {
        parent::__construct($nombre, $apellido, $numDocumento, $numTelefono, $numAsiento, $numTicket);
        $this->numFrecuente = $numFrecuente;
        $this->cantMillas = $cantMillas;
    }
    public function getNumFrecuente(){
        return $this->numFrecuente;
    }
    public function setNumFrecuente($numFrecuente){
        $this->numFrecuente = $numFrecuente;
    }
    public function getCantMillas(){
        return $this->cantMillas;
    }
    public function setCantMillas($cantMillas){
        $this->cantMillas = $cantMillas;
    }


    

}