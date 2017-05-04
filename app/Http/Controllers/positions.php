<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class positions extends Controller
{
    function RB()
    {
        $stats = ['2', 'Short', '300']; //DataBase::RB('JERSEY_NUMBER', 'NAME', 'TOTAL_YARDS');

        return view("RB", [
            'title' => "Running Backs",
            'heading' => "Running Back Statistics",
            'stats' => $stats,


        ]);
    }

    function LB(){

    }

    function WR(){


    }
}
