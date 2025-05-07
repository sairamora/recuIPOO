<?php
class Prestamo{
    
//atributo
private static int $id = 0;
private int $identificacion;
private int $codElectrodomestico;
private string $fecha;
private float $monto;
private int $cantidad_de_cuotas;
private float $tazaInt;
private array $colCuotas = [];
private string $refPersona;

//metodo constructor
public function __construct(float $monto,int $cantidad_de_cuotas,float $tazaInt,string $refPersona){
    self::$id++;
    $this -> id = self::$id;
    $this -> monto = $monto;
    $this -> cantidad_de_cuotas = $cantidad_de_cuotas;
    $this -> tazaInt = $tazaInt;
    $this -> refPersona = $refPersona;
}
//metodos de acceso get
public static function getUltimoId(): int { return self::$id; }
public function getIdentificacion():int { return $this -> identificacion; }
public function getCodElectrodomestico():int { return $this -> codElectrodomestico; }
public function getFecha():string { return $this -> fecha; }
public function getMonto():float { return $this -> monto; }
public function getCantidadCuotas():int { return $this -> cantidad_de_cuotas; }
public function getTazaInt():float { return $this -> tazaInt; }
public function getColCuotas():array { return $this -> colCuotas; }
public function getRefPersona():string { return $this -> refPersona; }

//metodos de acceso set
public function setIdentificacion(int $identificacion) { $this -> identificacion = $identificacion; }
public function setCodElectrodomestico(int $codElectrodomestico) { $this -> codElectrodomestico = $codElectrodomestico; }
public function setFecha(string $fecha) { $this -> fecha = $fecha; }
public function setMonto(float $monto) { $this -> monto = $monto; }
public function setCantidadCuotas(int $cantidad_de_cuotas) { $this -> cantidad_de_cuotas = $cantidad_de_cuotas; }
public function setTazaInt(float $tazaInt) { $this -> tazaInt = $tazaInt; }
public function setColCuotas(array $colCuotas) { $this -> colCuotas = $colCuotas; }
public function setRefPersona(string $refPersona) { $this -> refPersona = $refPersona; }
//metodo calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota y calcula el importe del interés sobre el saldo deudor.
public function calcularInteresPrestamo(int $numCuota):float{
    $cantCuotas = $this -> getCantidadCuotas();
    $monto = $this -> getMonto();
    $taza = $this -> getTazaInt();
    $interes = ($monto - ($monto / $cantCuotas) * $numCuota - 1) * ($taza / 0.01);
    return $interes;
}
//metodo otorgarPrestamo
public function otorgarPrestamo(int $numCuota){
    $fechaActual = date("Y-m-d");
    $this -> setFecha($fechaActual);
    $monto = $this -> getMonto();
    $cantCuotas = $this -> getCantidadCuotas();
    $montoCuota = $monto / $cantCuotas;
    $this -> setColCuotas([]);
    for ($i = 1; $i <= $cantCuotas; $i++) {
        $interes = $this->calcularInteresPrestamo($i);
        $cuota = new Cuota($i, $montoCuota, $interes);
        $colCuotas = $this->getColCuotas();
        $colCuotas[] = $cuota;
        $this->setColCuotas($colCuotas);
    }
}
//metodo darSiguienteCuotaPagar que retorna la referencia a la siguiente cuota que debe ser abonada de un préstamo, si el préstamo tiene todas sus cuotas canceladas retorna null
public function darSiguienteCuotaPagar(){
    $colCuotas = $this -> getColCuotas();
    foreach ($colCuotas as $cuota) {
        if (!$cuota->getCanceladas()) {
            $retorno = $cuota;
        }
    }
    $retorno = null;
    return $retorno;
}
}