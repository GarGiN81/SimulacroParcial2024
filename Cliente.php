<?php
class Cliente{
    private $nombre;
    private $apellido;
    private $esActiva;
    private $numDoc;

    public function __construct($cNombre,$cApellido,$cActiva,$cDni) {
        $this->nombre = $cNombre;
        $this->apellido=$cApellido;
        $this-$esActiva=$cActiva;
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

    public function getEsActiva(){
        return $this-$esActiva;
    }

    public function setEsActiva($esActiva){
        $this-$esActiva = $esActiva;
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
                Estado: ".$this->getEsActiva()."\n
                DNI: ".$this->getNumDoc()."\n";
        return $cadena;
    }











}
?>