<?php

namespace App\Http\Controllers\Decorator;
use App\Http\Controllers\Controller;


class Client extends Controller
{

    function __construct()
    {
        
    }
    
    public function start()
    {
        $bd = new BasicDress();     
        $sd = new SportyDress(new BasicDress());     
        $fd = new FancyDress(new BasicDress());     
        $su = new FancyDress(new SportyDress(new BasicDress()));     


        echo $bd->getCost();
        echo "<br>";
        echo $sd->getCost();
        echo "<br>";
        echo $fd->getCost();
        echo "<br>";
        echo $su->getCost();
        
    }
 


}


