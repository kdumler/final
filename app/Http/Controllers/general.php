<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{
    function about(){
        $routes = array("/about", "/roster");

        list($about, $roster) = $routes;
        echo "<li> Go to $about for this page
              <li> Go to $roster for the roster";
    }
    function roster(){

    }
    function RB(){

    }
    function LB(){

    }
    function WR(){

    }
}
