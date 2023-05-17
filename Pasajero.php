<?php

// Definición de la clase Pasajero

class Pasajero{

    // Atributos de la clase Pasajero
    private $nombre;         // Nombre del pasajero
    private $apellido;       // Apellido del pasajero
    private $numDocumento;   // Número de documento del pasajero
    private $numTelefono;    // Número de teléfono del pasajero
    private $numAsiento;     //Numero de asiento del pasajero
    private $numTicket;      //Numero de ticket del viaje
    // Constructor de la clase Pasajero, que asigna valores a los atributos de la clase
    public function __construct($nombre, $apellido, $numDocumento, $numTelefono, $numAsiento, $numTicket)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numDocumento =$numDocumento;
        $this->numTelefono = $numTelefono;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
    }



    // Métodos GET y SET para cada uno de los atributos de la clase Pasajero

    // Función para obtener el nombre del pasajero
    public function getNombre(){
        return $this->nombre;
    }

    // Función para establecer el nombre del pasajero
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    // Función para obtener el apellido del pasajero
    public function getApellido(){
        return $this->apellido;
    }

    // Función para establecer el apellido del pasajero
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    // Función para obtener el número de documento del pasajero
    public function getDocumento(){
        return $this->numDocumento;
    }

    // Función para establecer el número de documento del pasajero
    public function setDocumento($numDocumento){
        $this->numDocumento = $numDocumento;
    }

    // Función para obtener el número de teléfono del pasajero
    public function getTelefono(){
        return $this->numTelefono;
    }

    // Función para establecer el número de teléfono del pasajero
    public function setTelefono($numTelefono){
        $this->numTelefono = $numTelefono;
    }

    // Función para obtener el número de teléfono del pasajero
    public function getNumAsiento(){
        return $this->numAsiento;
    }

    // Función para establecer el número de teléfono del pasajero
    public function setNumAsiento($numAsiento){
        $this->numAsiento = $numAsiento;
    }
    // Función para obtener el número de teléfono del pasajero
    public function getNumTicket(){
        return $this->numTicket;
    }

    // Función para establecer el número de teléfono del pasajero
    public function setNumTicket($numTicket){
        $this->numTicket = $numTicket;


    }
    public function __toString()
    {
        $infoPasajero = "";

        $infoPasajero = "Nombre= " . $this->getNombre() . " \n Apellido= " . $this->getApellido() . " \n Numero de documento = " . $this->getDocumento() 
        . " \n Numero de telefono= " . $this->getTelefono() . " \n Numero de Asiento=" . $this->getNumAsiento() . " \n Numero de ticket" . $this->getNumTicket() ;
         return $infoPasajero;
    }

}
