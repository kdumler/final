<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/about', 'general@about');                                      //done




Route::get('/roster', 'general@roster');




Route::get('/total', 'general@total');



Route::group(['prefix' => 'RB'], function () {

    Route::get('/stats', 'positions@RB');

    Route::get('/compare/{x}/{y}', function($x , $y){                        //NEEDS TO CALCULATE
        $queryx = "SELECT TOTAL_YARDS FROM RB WHERE JERSEY_NUMBER = $x";
        $queryy = "SELECT TOTAL_YARDS FROM RB WHERE JERSEY_NUMBER = $y";

        $RB1 = \DB::connection('kdumlerfootball')->select($queryx);
        $RB2 = \DB::connection('kdumlerfootball')->select($queryy);

        $rbYards1 = $RB1[0]->TOTAL_YARDS;
        $rbYards2 = $RB2[0]->TOTAL_YARDS;

        if ($rbYards1 > $rbYards2) {
            $result = $rbYards1 - $rbYards2;
        } else {
            $result = $rbYards2 - $rbYards1;
        }

        if($rbYards1 > $rbYards2){
            $number1 = $x;
        } else {
            $number1 = $y;
        }

        if($rbYards1 < $rbYards2){
            $number2 = $x;
        } else {
            $number2 = $y;
        }


        return "<h1> Number $number1 had $result more rushing yards than number $number2 ";

    })->where(['x' => '[0-9]|[1-9][0-9]', 'y' => '[0-9]|[1-9][0-9]']);


});


Route::group(['prefix' => 'LB'], function () {

    Route::get('/stats', 'positions@LB');
    Route::get('/compare/{x}/{y}', function ($x, $y) {                  //NEEDS TO CALCULATE
        $queryx = "SELECT TOTAL_TACKLES FROM LB WHERE JERSEY_NUMBER = $x";
        $queryy = "SELECT TOTAL_TACKLES FROM LB WHERE JERSEY_NUMBER = $y";

        $LB1 = \DB::connection('kdumlerfootball')->select($queryx);
        $LB2 = \DB::connection('kdumlerfootball')->select($queryy);

        $lbTackles1 = $LB1[0]->TOTAL_TACKLES;
        $lbTackles2 = $LB2[0]->TOTAL_TACKLES;

        if ($lbTackles1 > $lbTackles2) {
            $result = $lbTackles1 - $lbTackles2;
        } else {
            $result = $lbTackles2 - $lbTackles1;
        }

        if($lbTackles1 > $lbTackles2){
            $number1 = $x;
        } else {
            $number1 = $y;
        }

        if($lbTackles1 < $lbTackles2){
            $number2 = $x;
        } else {
            $number2 = $y;
        }


        return "<h1> Number $number1 had $result more tackles than number $number2 ";

    })->where(['x' => '[0-9]|[1-9][0-9]', 'y' => '[0-9]|[1-9][0-9]']);

});

Route::group(['prefix' => 'WR'], function () {

    Route::get('/stats', 'positions@WR');
    Route::get('/compare/{x}/{y}', function ($x, $y) {                  //NEEDS TO CALCULATE
        $queryx = "SELECT TOTAL_YARDS FROM WR WHERE JERSEY_NUMBER = $x";
        $queryy = "SELECT TOTAL_YARDS FROM WR WHERE JERSEY_NUMBER = $y";

        $WR1 = \DB::connection('kdumlerfootball')->select($queryx);
        $WR2 = \DB::connection('kdumlerfootball')->select($queryy);

        $wrYards1 = $WR1[0]->TOTAL_YARDS;
        $wrYards2 = $WR2[0]->TOTAL_YARDS;

        if ($wrYards1 > $wrYards2) {
            $result = $wrYards1 - $wrYards2;
        } else {
            $result = $wrYards2 - $wrYards1;
        }

        if($wrYards1 > $wrYards2){
            $number1 = $x;
        } else {
            $number1 = $y;
        }

        if($wrYards1 < $wrYards2){
            $number2 = $x;
        } else {
            $number2 = $y;
        }


        return "<h1> Number $number1 had $result more recieving yards than number $number2 ";

    })->where(['x' => '[0-9]|[1-9][0-9]', 'y' => '[0-9]|[1-9][0-9]']);
});