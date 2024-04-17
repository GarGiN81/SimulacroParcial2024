<?php
class Cliente{
    private $nombre;
    private $apellido;
    private $esBaja;
    private $numDoc;

    public function __construct($cNombre,$cApellido,$cBaja,$cDni) {
        $this->nombre = $cNombre;
        $this->apellido=$cApellido;
        $this->esBaja=$cBaja;
        $this->numDoc=$cDni;
    }

//metodos de acceso
    public function getNombre(){
        return this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getEsBaja(){
        return $this->esBaja;
    }

    public function setEsBaja($esBaja){
        $this->esBaja = $esBaja;
    }
    
    public function getNumDoc(){
        return $this->numDoc;
    }
    public function setNumDoc($numDoc){
        $this->numDoc = $numDoc;
    }
    public function __toString(){
        $cadena="";
        $cadena="Nombre: ".$this->getNombre()."\n
                Apellido: ".$this->getApellido()."\n
                Estado: ".$this->getEsBaja()."\n
                DNI: ".$this->getNumDoc()."\n";
        return $cadena;
    }











}
?>