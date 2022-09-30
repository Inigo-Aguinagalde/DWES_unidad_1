<?php 
class Ordenador implements JsonSerializable{
    private String $SO;
    private String $CodHZ;
    private bool $esSobremesa;
    
    public function jsonSerialize() {
        return $this->array;
    }
    
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

    public function toString() {
        echo "<p>El sistema operativo es: " . $this->SO . "</p><br>";
        echo "<p>El codigo del ordenador es: " . $this->CodHZ . "</p><br>";
        if ($this->esSobremesa) {
            $mesa= "si";
        }else{
            $mesa="no";
        }
        echo "<p>El ordenadro es de sobremesa: " . $mesa . "</p>";
    }
    
    
    
}

?>