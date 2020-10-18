<?php  

class plantilla{

    public function __construct(){
        include ('vistas/plantilla.php');
    }
};

class usuario{
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $edad;

    public function __construct($nom,$apP,$apM,$edad){
        $this->nombre = $nom;
        $this->apellidoPaterno=$apP;
        $this->apellidoMaterno=$apM;
        $this->edad = $edad;

    }

    public function nombreCompleto($solicitante){
        echo '<br>Tu nombre es: '.$this->nombre.' '.$this->apellidoPaterno.' solicitó:'.$solicitante;
    }
}

?>