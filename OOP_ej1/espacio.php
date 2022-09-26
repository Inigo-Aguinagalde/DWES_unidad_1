<?php 

abstract class Espacio{
    private bool $wifi=null;
    private int $puntoRed=null;
    /**
     * @return mixed
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * @return mixed
     */
    public function getPuntoRed()
    {
        return $this->puntoRed;
    }

    /**
     * @param mixed $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    /**
     * @param mixed $puntoRed
     */
    public function setPuntoRed($puntoRed)
    {
        $this->puntoRed = $puntoRed;
    }

    
    
    
}



?>