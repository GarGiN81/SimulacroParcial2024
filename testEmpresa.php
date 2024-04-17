<?php
include_once "Empresa.php";
include_once "Ventas.php";
include_once "Cliente.php";
include_once "Moto.php";

$objCliente1=new Cliente("Juan","Merino",true,"35266433");
$objCliente2= new Cliente ("Natalia","Soto",false,"37554862");
$objMoto1=new Moto(11,2230000,2022,"Benelli Imperiale 400",85,true);
$objMoto2=new Moto(12,584000,2021,"Zanella Zr 150 Ohc",70,true);
$objMoto3=newMoto(13,999900,2023,"Zanella Patagonian Eagle 250",55,false);

/**4. Se crea un objeto Empresa con la siguiente información: 
 * denominación =” Alta Gama”, dirección= “Av Argenetina 123”,
 *  colección de motos= [$obMoto1, $obMoto2, $obMoto3] , 
 * colección de clientes =[$objCliente1, $objCliente2 ],
 * la colección de ventas realizadas=[]. */
$objEmpresa=new Empresa("Alta Gama","Avenida Argentina 123",[$objCliente1, $objCliente2],[$objMoto1, $objMoto2, $objMoto3],[]);
?>