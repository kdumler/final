<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{

    public function about()
    {
        $about = "/about                    Brings you to this page";
        $roster = "/roster                  Shows football roster";
        $total = "/total                    Shows total offensive yards and tackles ";

        $statsRB = "/RB/stats               Shows jersey number, name, and rushing yards of running backs";
        $compareRB = "/RB/compare/{x}/{y}    Calculates the difference in rushing yards between RB Jersey Number x and y ";

        $statsWR = "/WR/stats               Shows jersey number, name, and passing yards of wide receivers";
        $compareWR = "/WR/compare/{x}/{y}    Calculates the difference in passing yards between WR Jersey Number x and y ";


        $statsLB = "/LB/stats               Shows jersey number, name, and tackles of line backers";
        $compareLB = "/LB/compare/{x}/{y}    Calculates the difference in tackles between LB Jersey Number x and y ";




        return view('about',[
            'about' => $about,
            'roster' => $roster,
            'total' => $total,

            'statsRB' => $statsRB,
            'compareRB' => $compareRB,

            'statsWR' => $statsWR,
            'compareWR' => $compareWR,

            'statsLB' => $statsLB,
            'compareLB' => $compareLB,

            ]);
    }

    function roster(){
            $query = "SELECT * FROM ROSTER";

            $roster = \DB::connection('kdumlerfootball')->select($query);

            return view('roster', [
                'roster' => $roster,
            ]);
    }


    function total(){
        $query = "SELECT SUM(RB.TOTAL_YARDS), SUM(WR.TOTAL_YARDS), SUM(LB.TOTAL_TACKLES) FROM RB, WR, LB";
        $total = \DB::connection('kdumlerfootball')->select($query);


        return view('total', [
            'total' => $total
        ]);

        $queryWR = "SELECT SUM(TOTAL_YARDS) FROM WR";
        $totalWR = \DB::connection('kdumlerfootball')->select($queryWR);


        return view('total', [
            'totalWR' => $totalWR,
        ]);

        $queryLB = "SELECT SUM(TOTAL_TACKLES) FROM LB";
        $totalLB = \DB::connection('kdumlerfootball')->select($queryLB);


        return view('total', [
            'totalLB' => $totalLB,
        ]);

    }

}