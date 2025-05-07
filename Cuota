<?php
class Cuota{
    //atributos
    private int $numCuota;
    private float $monto_cuota;
    private float $monto_interes;
    private bool $canceladas;
    //metodo constructor
    public function __construct(int $numCuota,float $monto_cuota,float $monto_interes){
        $this -> numCuota = $numCuota;
        $this -> monto_cuota = $monto_cuota;
        $this -> monto_interes = $monto_interes;
        $this -> canceladas = false;
    }
    //metodos de acceso get
    public function getNumeroCuota():int { return $this -> numCuota; }
    public function getMontoCuota():float { return $this -> monto_cuota; }
    public function getMontoInteres():float { return $this -> monto_interes; }
    public function getCanceladas():bool { return $this -> canceladas; }

    //metodos de acceso set
    public function setNumeroCuota(int $numero) { $this -> numCuota = $numero; }
    public function setMontoCuota(float $monto_cuota) { $this -> monto_cuota = $monto_cuota; }
    public function setMontoInteres(float $monto_interes) { $this -> monto_interes = $monto_interes; }
    public function setCanceladas(bool $canceladas) { $this -> canceladas = $canceladas; }
    //metodo darMontoFinalCuota que retorna el importe de la cuota mas los intereses aplicados
    public function darMontoFinalCuota():float{
        $cuota = $this -> getMontoCuota();
        $porcentaje = $this -> getMontoInteres();
        $interesCalculado = $cuota * $porcentaje / 100;
        $montoFinal = $cuota + $interesCalculado;
        return $montoFinal;
    }
    //metodo toString
    public function __toString(){
        $cadena = (
        "Numero de cuota: " . $this -> getNumeroCuota() . "\n" .
        "Monto de cuota: " . $this -> getMontoCuota() . "\n" .
        "Monto de interes: " . $this -> getMontoInteres() . "\n" .
        "Cancelada: " . ($this -> getCanceladas() ? 'Si' : 'No') . "\n");
        return $cadena;
    }
}