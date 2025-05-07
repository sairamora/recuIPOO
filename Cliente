<?php
class Cliente{
    //atributos
    private string $nombre;
    private string $apellido;
    private string $dni;
    private string $direccion;
    private string $mail;
    private int $telefono;
    private float $impHaberes;
    //metodo constructor
    public function __construct(string $nombre, string $apellido, string $dni, string $direccion, string $mail, int $telefono, float $impHaberes){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
        $this -> direccion = $direccion;
        $this -> mail = $mail;
        $this -> telefono = $telefono;
        $this -> impHaberes = $impHaberes;
    }
    //metodos de acceso get
    public function getNombreCliente() :string { return $this -> nombre; }
    public function getApellidoCliente():string { return $this -> apellido; }
    public function getDniCliente() { return $this -> dni; }
    public function getDireccionCliente():string { return $this -> direccion; }
    public function getMailCliente():string { return $this -> mail; }
    public function getTelefonoCliente():int { return $this -> telefono; }
    public function getImpuestoHaberes():float { return $this -> impHaberes; }
    //metodos de acceso set
    public function setNombreCliente(string $nombre) { $this -> nombre = $nombre; }
    public function setApellidoCliente(string $apellido) { $this -> apellido = $apellido; }
    public function setDniCliente(string $dni) { $this -> dni = $dni; }
    public function setDireccionCliente(string $direccion) { $this -> direccion = $direccion; }
    public function setMailCliente(string $mail) { $this -> mail = $mail; }
    public function setTelefonoCliente(int $telefono) { $this -> telefono = $telefono; }
    public function setImpuestoHaberes(float $impHaberes) { $this -> impHaberes = $impHaberes; }
    //metodo toString
    public function __toString(){
        $cadena = (
            "Nombre: " . $this -> getNombreCliente() . "\n" .
            "Apellido: " . $this -> getApellidoCliente() . "\n" .
            "DNI: " . $this -> getDniCliente() . "\n" .
            "Direccion: " . $this -> getDireccionCliente() . "\n" .
            "Mail: " . $this -> getMailCliente() . "\n" .
            "Telefono: " . $this -> getTelefonoCliente() . "\n" .
            "Impuesto Haberes: " . $this -> getImpuestoHaberes() . "\n");
            return $cadena;
    }
}