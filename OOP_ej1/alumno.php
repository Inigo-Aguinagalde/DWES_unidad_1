<?php

class Alumno extends Persona
{
    
    private String $codMatricula;
    private String $ciclo;
    /**
     * @return mixed
     */
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    /**
     * @return mixed
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }

    /**
     * @param mixed $codMatricula
     */
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }

    /**
     * @param mixed $ciclo
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }

    
    
    
}

