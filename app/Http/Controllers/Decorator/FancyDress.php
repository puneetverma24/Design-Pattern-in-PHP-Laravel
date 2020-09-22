<?php 
namespace App\Http\Controllers\Decorator;
/**
 * 
 */
class FancyDress implements Dress
{
    
    private $item;
    function __construct(Dress $d)
    {
        $this->item = $d;
    }
    
    
    public function getCost()
    {
        return "Fancy Dress + ".$this->item->getCost();
    }
}
