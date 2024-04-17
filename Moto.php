<?php
class Moto{
//código, costo, año fabricación, descripción, porcentaje
//incremento anual, activa
private $codigo;
private $costo;
private $anioFab;
private $descripcion;
private $porcentajeInc;
private $activa;

public function __construct($mCod,$mCosto,$mAnio,$mDesc,$mPorc,$mActiva){
    $this->codigo=$mCod;
    $this->costo=$mCosto;
    $this->anioFab=$mAnio;
    $this->descripcion=$mDesc;
    $this->porcentajeInc=$mPorc;
    $this->activa=$mActiva;
}

public function getCodigo(){
return $this->codigo;
}
public function setCodigo($codigo){
$this->codigo = $codigo;
}
public function getCosto(){
return $this->costo;
}
public function setCosto($costo){
$this->costo = $costo;
}
public function getAnioFab(){
return $this->anioFab;
}
public function setAnioFab($anioFab){
$this->anioFab = $anioFab;
}
public function getDescripcion(){
return $this->descripcion;
}
public function setDescripcion($descripcion){
$this->descripcion = $descripcion;
}
public function getPorcentajeInc(){
return $this->porcentajeInc;
}
public function setPorcentajeInc($porcentajeInc){
$this->porcentajeInc = $porcentajeInc;
}
public function getActiva(){
return $this->activa;
}
public function setActiva($activa){
$this->activa = $activa;

}
public function __toString(){
    $cadena="";
    $cadena="Codigo: ".$this->getCodigo()."\n
            Costo: ".$this->getCosto()."\n
            Año de Fabricación: ".$this->getAnioFab()."\n
            Descripción: ".$this->getDescripcion()."\n
            Porcentaje de Incremento anual: ".$this->getPorcentajeInc()."\n
            Activa: ".$this->getActiva();
    return $cadena;
}
/**
 * 5. Implementar el método darPrecioVenta el cual calcula el valor por el cual 
 * puede ser vendida una moto.
*Si la moto no se encuentra disponible para la venta retorna un valor < 0. 
*Si la moto está disponible para
*la venta, el método realiza el siguiente cálculo:
*$_venta = $_compra + $_compra * (anio * por_inc_anual)
**donde $_compra: es el costo de la moto.
*anio: cantidad de años transcurridos desde que se fabricó la moto.
*por_inc_anual: porcentaje de incremento anual de la moto.

 */
public function darPrecioVenta(){
    $_venta=-1;
    $anio=$this->getAnioFab();
    $por_inc_anual=$this->getPorcentajeInc();
    $_compra=$this->getCosto();
    $estado=$this->getActiva();
    if ($estado==true){
        $_venta = $_compra + $_compra*($anio*$por_inc_anual);
    }
    return $_venta;
}
}
?>