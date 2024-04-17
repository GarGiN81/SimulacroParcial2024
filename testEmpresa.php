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

/**5. Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.
 */
$venta=$objEmpresa->registrarVenta([11,12,13], $objCliente2);
echo $venta;

/**6. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido. */
$venta2=$objEmpresa->registrarVenta([0], $objCliente2);
echo $venta2;
/**7. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido.
 */
$venta3=$objEmpresa->registrarVenta([2], $objCliente2);
echo $venta3;

/**8. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente1.
 */

/**9. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente2 */

/**10. Realizar un echo de la variable Empresa creada en 2. */


?>