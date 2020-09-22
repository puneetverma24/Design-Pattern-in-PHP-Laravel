<?php 
namespace App\Http\Controllers\Decorator;


/**
 * 
 */
class BasicDress implements Dress
{
    
    function __construct()
    {
    }

    public function getCost()
    {    
        return "Basic Dress ";
    }
    
    
    
}
