<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{

    public function about()
    {
        $result = <<<EOT
        <pre>
        /about                       This screen
        /roster                      Adds 
        /RB                          Subtracts
        /LB                          Multiplies two specified numbers
        /WR                          Divides two specified numbers
        </pre>
        
EOT;
        return $result;
    }

    function roster()
    {

    }
    function total(){

    }
}