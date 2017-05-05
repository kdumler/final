<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class positions extends Controller
{
    function RB()
    {
       $query = "SELECT * FROM RB";

       $stats    = \DB::connection('kdumlerfootball')->select($query);

       $count = count($stats);

        return view('RB', [
            'count' => $count,
            'stats' => $stats,
        ]);
    }

    function LB()
    {
        $query = "SELECT * FROM LB";

        $stats    = \DB::connection('kdumlerfootball')->select($query);

        $count = count($stats);

        return view('LB', [
            'count' => $count,
            'stats' => $stats,
        ]);
    }

    function WR()
    {
        $query = "SELECT * FROM WR";

        $stats    = \DB::connection('kdumlerfootball')->select($query);

        $count = count($stats);

        return view('WR', [
            'count' => $count,
            'stats' => $stats,
        ]);

    }

}
