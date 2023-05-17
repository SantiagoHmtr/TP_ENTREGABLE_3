<?php
include_once ("Pasajero.php");
class Viaje
{

    private $codigoViaje; //Codigo que se le asigna al viaje
    private $destino;   //Destino del viaje
    private $cantMaxPasajeros;  //Cantidad maxima de pasajeros que pueden ingresar en el viaje
    private $cantidadDePasajeros;   //Cantidad de pasajeros actuales
    private $coleccionPasajeros = [];   //Una coleccion en forma de array multidimensional para almacenar los datos de los pasajeros
    private $responsableDeViaje;
    private $costoViaje;
    private $recaudacionViaje;



    #Construsctor
    public function __construct($codigoViaje, $destino, $cantMaxPasajeros,$costoViaje,)
    {
        $this->codigoViaje = $codigoViaje;
        $this->destino = $destino;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->costoViaje = $costoViaje;
        
    }
    #Metodos get y set 
    function getCodigoViaje()
    {
        return $this->codigoViaje;
    }
    function setCodigoViaje($codigoViaje)
    {
        $this->codigoViaje = $codigoViaje;
    }
    function getDestino()
    {
        return $this->destino;
    }
    function setDestino($destino)
    {
        $this->destino = $destino;
    }
    function getCantMaxPasajeros()
    {
        return $this->cantMaxPasajeros;
    }
    function setCantMaxPasajeros($cantMaxPasajeros)
    {
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }

    function getColeccionPasajeros()
    {
        return $this->coleccionPasajeros;
    }

    function setColeccionPasajeros($coleccionPasajeros)
    {
        $this->coleccionPasajeros = $coleccionPasajeros;
    }

    function getCantidadDePasajeros()
    {
        return $this->cantidadDePasajeros;
    }
    function setCantidadDepasajeros($cantidadDePasajeros)
    {
        $this->cantidadDePasajeros = $cantidadDePasajeros;
    }
    function getResponsableViaje()
    {
        return $this->responsableDeViaje;
    }
    function setResponsableViaje($responsableDeViaje)
    {
        $this->responsableDeViaje = $responsableDeViaje;
    }
    function getCostoViaje(){
        return $this->costoViaje;
    }
    function setCostoViaje($costoViaje){
        $this->costoViaje = $costoViaje;
    }
    function getRecaudacionViaje(){
        return $this->recaudacionViaje;
    }
    function setRecaudacionViaje($recaudacionViaje){
        $this->recaudacionViaje = $recaudacionViaje;
    }

    #Verificar si el viaje esta lleno / True = hay lugar disponible / False = no hay lugar disponible

    public function   asientosDisponibles()
    {
        if ((count($this->coleccionPasajeros) < $this->cantMaxPasajeros)) {
            return true;
        } else return false;
    }


    public function __toString()
    {
        return "Codigo de viaje :" . $this->getCodigoViaje() . "\n" . "Destino = " . $this->getDestino() . " \n" . "Cantidad maxima de personas:\n" . $this->getCantMaxPasajeros();
    }

    //Metodo para encontrar, si se encuentra el pasajero se retorna el indice que le corresponde en el array, sino retorna -1, para luego reutilizar con falicidad esta informacion
    public function findPasajero($dniIngresado)
    {
        $bandera = false;
        $arrayAux = $this->getColeccionPasajeros();
        $i = 0;
        while ($i < (count($arrayAux)) && $bandera == false) {
            $pasajero = $arrayAux[$i];
            $dniPasajero = $pasajero->getDocumento();
            if ($dniPasajero == $dniIngresado) {
                $bandera = true;
                return $i;
            }
            $i++;
        }
        $i = -1;
        return $i;
    }

    //Funcion para agregar pasajero,
    public function agregarPasajero($objPasajero)
    {

        $dniNuevoPasajero = $objPasajero->getDocumento();
        $bandera = false;
        $arrayAux = $this->getColeccionPasajeros();
        $i = 0;
        while ($i < (count($arrayAux)) && $bandera == false) {
            $pasajero = $arrayAux[$i];
            $dniPasajero = $pasajero->getDocumento();
            if ($dniPasajero == $dniNuevoPasajero) {
                $bandera = true;
                return $bandera;
            }
            $i++;
        }
        if ($bandera == false) {
            array_push($arrayAux, $objPasajero);
            $this->setColeccionPasajeros($arrayAux);
        }
    }

    public function darPorcentajeIncremento($pasajeroSeleccionado){
        $incremento = 1;
        if ($pasajeroSeleccionado instanceof PasajeroVip){
            if ($pasajeroSeleccionado->getCantMillas()>300){
                $incremento = 1.3;
                return $incremento;
            }
            $incremento = 1.35;
            return $incremento;
        }
        if ($pasajeroSeleccionado instanceof PasajeroEspecial){
            if ($pasajeroSeleccionado->getCantServicios()>1){
                $incremento = 1.3;
                return $incremento;
            }else {
                $incremento = 1.15;
                return $incremento;
            }
        }
        if ($pasajeroSeleccionado instanceof Pasajero){
            $incremento = 1.1;
            return $incremento;
        }
    
    
    }

    public function venderPasaje($pasajeroCompra){
        $costo = $this->getCostoViaje();
        $porcIncremento = $this->darPorcentajeIncremento($pasajeroCompra);
        $precioFinal = $costo * $porcIncremento;
        $recaudado = $this->getRecaudacionViaje();
        $recaudacionFinal = $recaudado + $precioFinal;
        $this->setRecaudacionViaje($recaudacionFinal);
        
    }


}

//Una funcion para imprimir un menu en pantalla
function textoMenu()
{
    echo "\n Ingrese la opcion deseada:\n" .
        "1. Mostrar datos del viaje.\n" .
        "2. Modificar datos del viaje(Codigo, destino, cantidad maxima de asientos dispoinbles.)\n" .
        "3. Mostrar datos de un pasajero \n" .
        "4.Modificar informacion de un pasajero. \n" .
        "5.Agregar nuevo pasajero\n" .
        "6.Agregar responsable de viaje.\n" .
        "7.Consultar monto de pasajero.\n8.Salir";
}
