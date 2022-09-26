<?php 
 class Ordenador{
    public String $SO;
    public String $CodHZ;
    private bool $esSobremesa;
    
    
    /**
     * @return mixed
     */
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }

    /**
     * @param mixed $esSobremesa
     */
    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }

    /**
     * @return mixed
     */
    public function getSO()
    {
        return $this->SO;
    }

    /**
     * @return mixed
     */
    public function getCodHZ()
    {
        return $this->CodHZ;
    }

    /**
     * @param mixed $SO
     */
    public function setSO($SO)
    {
        $this->SO = $SO;
    }

    /**
     * @param mixed $CodHZ
     */
    public function setCodHZ($CodHZ)
    {
        $this->CodHZ = $CodHZ;
    }

    
    
    
}

?>