<?php
include_once("Pasajero.php");

class PasajeroEspecial extends Pasajero
{

    private $cantServicios;

    public function __construct($nombre, $apellido, $numDocumento, $numTelefono, $numAsiento, $numTicket, $cantServicios)
    {
        parent::__construct($nombre, $apellido, $numDocumento, $numTelefono, $numAsiento, $numTicket);
        $this->cantServicios = $cantServicios;
    }
    public function getCantServicios()
    {
        return $this->cantServicios;
    }
    public function setCantServicios($cantServicios)
    {
        $this->cantServicios = $cantServicios;
    }
}
