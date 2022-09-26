<?php

class docente extends Persona
{
    
    private int $sueldo;
    /**
     * @return mixed
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * @param mixed $sueldo
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    
    
    
}

