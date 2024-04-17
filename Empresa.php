<?php
class Empresa{

    //denominación, dirección, la colección de clientes, 
    //colección de motos y la colección de ventas realizadas
    private $denominacion;
    private $direccion;
    private $colClientes;
    private $colMotos;
    private $colVentas;

    public function __construct($eDenom,$eDirec,$eColC,$eColM,$eColV){
        $this->denominacion=$eDenom;
        $this->direccion=$eDirec;
        $this->colClientes=$eColC;
        $this->colMotos=$eColm;
        $this->colVentas=$eColV;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getColClientes(){
        return $this->colClientes;
    }

    public function setColClientes($colClientes){
        $this->colClientes = $colClientes;
    }

    public function getColMotos(){
        return $this->colMotos;
    }

    public function setColMotos($colMotos){
        $this->colMotos = $colMotos;
    }

    public function getColVentas(){
        return $this->colVentas;
    }

    public function setColVentas($colVentas){
        $this->colVentas = $colVentas;
    }


    public function __toString(){

        $cadena="";
        $cadena="Denominación: ".$this->getDenominacion()."\n
                Dirección: ".$this->getDireccion()."\n
                Lista Clientes: ".$this->getColClientes()."\n
                Lista Motos: ".$this->getColMotos()."\n
                Lista Ventas: ".$this->getColVentas();
        return $cadena;
    }

    /**Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos
     *  de la Empresa y retorna la referencia al objeto moto cuyo código coincide con el 
     * recibido por parámetro */
    public function retornarMoto($codigoMoto){
        $colM=$this->getColMotos();
        $i=0;
        $objMoto=null;
        while($i<count($comM)&&$objMoto==null){
            $ubicacion=$colM[$i];
            if($ubicacion->getCodigo()==$codigoMoto){
                $objMoto=$ubicacion;
            }else{
                $i++;
            }
        }
        return $objMoto;
    }

/** Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que 
* recibe por parámetro una colección de códigos de motos, la cual es recorrida, 
* y por cada elemento de la colección se busca el objeto moto correspondiente al 
* código y "se incorpora a la colección de motos de la instancia Venta que debe ser 
* creada". Recordar que no todos los clientes ni todas las motos, están disponibles 
* para registrar una venta en un momento determinado. El método debe setear los 
* variables instancias de venta que corresponda y retornar el importe final de la venta.
 */
    public function registrarVenta($colCodigosMoto,$objCliente){
        $venta=0;
        $listaVentas=$this->getColVentas();
        $vNum=count($listaVentas);
        $vFecha=date("d","m","y");
        for($i=0;$i<count($colCodigosMoto);$i++){
            $unCodigo=$colCodigosMoto[$i];
            $unaMoto=$this->retornarMoto($unCodigo);
            $precio=$unaMoto->darPrecioVenta();
            $arrayMoto[]=$unaMoto;
            if($unaMoto != null && $objCliente->getEsActiva()==true && $precio>0){
                $venta=$venta+$precio;
            }
        }
        $unaVenta= new Ventas($vNum,$vFecha,$objCliente,$arrayMoto,$venta);
        $arrayVentas=array_push($listaVentas,$unaVenta);
        $this->setColVentas($arrayVentas);
        return $venta;

    }






}


?>