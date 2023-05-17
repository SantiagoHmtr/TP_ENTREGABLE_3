<?php

// Clase ResponsableV
class ResponsableV{

    // Atributos de la clase
    private $nombre;        // Nombre del responsable
    private $apellido;      // Apellido del responsable
    private $numEmpleado;   // Número de empleado del responsable
    private $numLicencia;   // Número de licencia del responsable

    // Constructor de la clase que recibe los atributos como parámetros
    public function __construct($nombre, $apellido, $numEmpleado, $numLicencia)
    {
        $this->nombre = $nombre;                // Asignar nombre
        $this->apellido = $apellido;            // Asignar apellido
        $this->numEmpleado = $numEmpleado;      // Asignar número de empleado
        $this->numLicencia = $numLicencia;      // Asignar número de licencia
    }

    // Métodos Getters y Setters para acceder y modificar los atributos

    // Método para obtener el nombre del responsable
    function getNombre (){
        return $this->nombre;
    }

    // Método para establecer el nombre del responsable
    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    // Método para obtener el apellido del responsable
    function getApellido (){
        return $this->apellido;
    }

    // Método para establecer el apellido del responsable
    function setApellido ($apellido){
        $this->apellido = $apellido;
    }

    // Método para obtener el número de empleado del responsable
    function getNumEmpleado (){
        return $this->numEmpleado;
    }

    // Método para establecer el número de empleado del responsable
    function setNumEmpleado ($numEmpleado){
        $this->numEmpleado = $numEmpleado;
    }

    // Método para obtener el número de licencia del responsable
    function getNumLicencia (){
        return $this->numLicencia;
    }

    // Método para establecer el número de licencia del responsable
    function setnNumLicencia ($numLicencia){
        $this->numLicencia = $numLicencia;           
    }

    // Método mágico para convertir el objeto en una cadena de texto
    public function __toString()
    {
        // Crear una cadena con los datos del objeto
        $str = "Nombre = " . $this->getNombre() . "\n Apellido = " . $this->getApellido() .
             "\n Numero de empleado = " . $this->getNumEmpleado() . "\n . Numero de licencia = " . $this->getNumLicencia();

        return $str;    // Retornar la cadena
    }
}
