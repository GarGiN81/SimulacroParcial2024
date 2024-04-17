<?php
class Ventas{

    //número, fecha, referencia al cliente, 
    //referencia a una colección de motos y el precio final.
    private $numero;
    private $fecha;
    private $objCliente;
    private $objColMoto;
    private $precioFinal;

    public function __construct($vNum,$vFecha,$vObjCliente,$vObjColMoto,$vPrecio){
        $this->numero=$vNum;
        $this->fecha=$vFecha;
        $this->objCliente=$vObjCliente;
        $this->objColMoto=$vObjColMoto;
        $this->precioFinal=$vPrecio;
    }
    
    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getObjCliente(){
        return $this->objCliente;
    }

    public function setObjCliente($objCliente){
        $this->objCliente = $objCliente;

    }

    public function getObjColMoto(){
        return $this->objColMoto;
    }

    public function setObjColMoto($objColMoto){
        $this->objColMoto = $objColMoto;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setPrecioFinal($precioFinal){
        $this->precioFinal = $precioFinal;
    }

    public function __toString(){
        $cadena="";
        $cadena="Numero: ".$this->getNumero()."\n
                Fecha: ".$this->getFecha()."\n
                Cliente: ".$this->getObjCliente()."\n
                Motos: ".$this->colMotosAString()."\n
                Precio Final: ".$this->getPrecioFinal()."\n";
        return $cadena;
    }
    //Función que muestra la colección de motos en formato String
    public function colMotosAString(){
        $cadena="";
        $motos=$this->getObjColMoto();
        for ($i=0;$i<count($motos);$i++){
            $cadena=$cadena."Moto N° [". $i. "]:\n".$motos[$i]."\n---\n";
        }
        return $cadena;
    }

    /**Implementar el método incorporarMoto($objMoto) que recibe por 
     * parámetro un objeto moto y lo incorpora a la colección de motos de la venta, 
     * siempre y cuando sea posible la venta. 
     * El método cada vez que incorpora una moto a la venta, debe actualizar la variable 
     * instancia precio  final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario. */
public function incorporarMoto($objMoto){
    $colMotos=$this->getObjColMoto();
    $precioM=$objMoto->darPrecioVenta();
    $precioF=$this->getPrecioFinal();
    if($precioM>0){
        array_push($colMotos,$objMoto);
        $this->setPrecioFinal($precioF + $precioM);
    }

}
//ejemplo función incorporarMoto corregida en clase
public function incorporarMoto2($objMoto){
    if($objMoto->getActiva()){
        $colMotoCopia=$this->getObjColMoto();
        array_push($colMotoCopia,$objMoto);
        $precioMoto=$objMoto->darPrecioVenta();
        $precioFinalCopia=$this->getPrecioFinal();
        $precioFinalCopia=$precioFinalCopia+$precioMoto;
        $this->setPrecioFinal($precioFinalCopia);
    }
}


}
?>