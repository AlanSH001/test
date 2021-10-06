<?php


class Persona
{
    public $nombre;
    public $peso;
    public $estatura;

    public function __construct($nombre, $peso, $estatura)
    {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->estatura = $estatura;
    }

    

    public function saludar()   
    {
        echo '<br>'
            . 'mi nombre es: ' . $this->nombre . '<br>'
            . ' mi peso es: ' . $this->peso . ' KG' . '<br>'
            . 'mi altura es: ' . $this->estatura .' M'. '<br>';
    }
}
