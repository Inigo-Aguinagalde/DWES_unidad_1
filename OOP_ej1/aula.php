<?php
 

class Aula extends Espacio{

    private String $numero;
    private bool $proyector;
    private bool $pizarraDigital;
    private bool $pizarraTactil;
    
    private $ordenadores = array();
    
    
    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->$numero;
    }

    /**
     * @return mixed
     */
    public function getProyector()
    {
        return $this->proyector;
    }

    /**
     * @return mixed
     */
    public function getPizarraDigital()
    {
        return $this->pizarraDigital;
    }

    /**
     * @return mixed
     */
    public function getPizarraTactil()
    {
        return $this->pizarraTactil;
    }

    /**
     * @param mixed $nombre
     */
    public function setNumero($numero)
    {
        $this->nombre = $numero;
    }

    /**
     * @param mixed $proyector
     */
    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

    /**
     * @param mixed $pizarraDigital
     */
    public function setPizarraDigital($pizarraDigital)
    {
        $this->pizarraDigital = $pizarraDigital;
    }

    /**
     * @param mixed $pizarraTactil
     */
    public function setPizarraTactil($pizarraTactil)
    {
        $this->pizarraTactil = $pizarraTactil;
    }

    
    public function addOrdenador($ordenador) {
   
        $puntoRed = parent::getPuntoRed();
        if ($puntoRed>count($ordenadores)) {
            $ordenadores[] = new $ordenador ;
        }else{
            echo "Ya no quedan puntos de red";
        }
        
        
    }
    
    public function addOrdenadores(int $ordenadores){
        
        $puntoRed = parent::getPuntoRed();
        if ($puntoRed>count($ordenadores)) {
            for ($i = 0; $i < count($ordenadorres); $i++) {
                $ordenadores[] = new $ordenador;
                if ($puntoRed<=count($ordenadores)) {
                    echo "Se ha alcanzado el numero maximo de ordenadores del aula";
                    break;
                }
            }
            
        }else{
            echo "Ya no quedan puntos de red";
        }
        
        
    }
    
    
}
