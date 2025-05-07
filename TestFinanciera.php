<?php
include_once "Financiera.php";
include_once "Cliente.php";
include_once "Prestamo.php";
include_once "Cuota.php";

//Crear un objeto Financiera con la siguiente información: denominación= ElectroCash, dirección = “Av. Arg 1234 ”
$financiera = new Financiera("ElectroCash", "Av. Arg 1234");
//crear 3 objetos Cliente
$cliente1 = new Cliente("Pepe", "Florez", "dni?", "Bs As 12", "dir@mail.com", 299444567, 40000);
$cliente2 = new Cliente("Luis", "Suarez", "dni?", "Bs As 123", "dir@mail.com",299445,4000 );
$cliente3 = new Cliente("Luis", "Suarez", "dni?", "Bs As 123", "dir@mail.com",299445,4000 );

//Crear  3 objetos Prestamos con la  información visualizada en la tabla: (referencia cliente: nombre del cliente)
$objPrestamo1 = new Prestamo(1, 50000, 5, 0.1, $cliente1 ->getNombreCliente());
$objPrestamo2 = new Prestamo(2, 10000, 4, 0.1, $cliente1 ->getNombreCliente());
$objPrestamo3 = new Prestamo(3, 10000, 2,0.1, $cliente3 ->getNombreCliente());
