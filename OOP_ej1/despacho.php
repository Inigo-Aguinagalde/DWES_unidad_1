<?php

include 'ordenador';

class Despacho extends Espacio{
    private string $nombre;
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function ordenador() {
        $ordenador = new Ordenador() ;
    }
    
    
    
    
}