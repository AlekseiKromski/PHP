<?php
namespace core\traits;
trait Tcolor{
    private $color;
    
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        return $this->color = $color;
    }
    
}
