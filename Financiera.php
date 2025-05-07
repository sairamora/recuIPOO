<?php
class Financiera{
    //atributos denominación, dirección y la colección de prestamos otorgados. 
    private string $denominacion;
    private string $direccion;
    private array $colPrestamos;
    //metodo constructor
    public function __construct(string $denominacion, string $direccion){
        $this -> denominacion = $denominacion;
        $this -> direccion = $direccion;
        $this -> colPrestamos = [];
    }
    //metodos de acceso get
    public function getDenominacion(): string { return $this -> denominacion; }
    public function getDireccion(): string { return $this -> direccion; }
    public function getColPrestamos(): array { return $this -> colPrestamos; }
    //metodos de acceso set
    public function setAtributo1(string $denominacion) { $this -> denominacion = $denominacion; }
    public function setAtributo2(string $direccion) { $this -> direccion = $direccion; }
    public function setAtributo3(array $colPrestamos) { $this -> colPrestamos = $colPrestamos; }
    //metodo toString
    public function __toString(){
        $cadena = (
        "Denominacion: " . $this -> getDenominacion() . "\n" .
        "Direccion: " . $this -> getDireccion() . "\n" .
        "Prestamos otorgados: \n");
        //verifico si hay prestamos otorgados
        if (count($this -> colPrestamos) > 0) {
            foreach ($this -> getColPrestamos() as $prestamo) {
                $cadena .= $prestamo . "\n";
            }
        } else {
            $cadena .= "No hay prestamos otorgados.\n";
        }
        return $cadena;
    }
}