<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{

    public function about()
    {

        return view('about');
    }

    function roster(){
            $query = "SELECT * FROM ROSTER";

            $roster = \DB::connection('kdumlerfootball')->select($query);

            return view('roster', [
                'roster' => $roster,
            ]);
    }


    function total(){
        $queryRB = "SELECT SUM(TOTAL_YARDS) FROM RB";

        $totalRB = \DB::connection('kdumlerfootball')->select($queryRB);

        return view('total', [
            'totalRB' => $totalRB,
        ]);

        $queryWR = "SELECT SUM(TOTAL_YARDS) FROM WR";

        $totalWR = \DB::connection('kdumlerfootball')->select($queryWR);

        return view('total', [
            'totalWR' => $totalWR,
        ]);
/*
        $queryLB = "SELECT SUM(TOTAL_TACKLES) FROM LB";

        $totalLB = \DB::connection('kdumlerfootball')->select($queryLB);

        return view('total', [
            'totalLB' => $totalLB,
        ]);
*/
    }

}