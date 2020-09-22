<?php 
namespace App\Http\Controllers\Decorator;

/**
 * 
 */
class SportyDress implements Dress
{
    private $item;
    function __construct(Dress $d)
    {
        $this->item = $d;

    }
    
    public function getCost()
    {
        return "Sporty Dress + ".$this->item->getCost();
    }
}


