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


Route::get('/about', 'general@about');




Route::get('/roster', 'general@roster');                                    //DONE




Route::get('/total', 'general@total');                                      //NEED WR AND LB



Route::group(['prefix' => 'RB'], function () {

    Route::get('/stats', 'positions@RB');                                   //DONE

    Route::get('/compare/{x}/{y}', function($x , $y){                        //NEEDS TO CALCULATE
        $queryx = "SELECT TOTAL_YARDS FROM RB WHERE JERSEY_NUMBER = $x";
        $queryy = "SELECT TOTAL_YARDS FROM RB WHERE JERSEY_NUMBER = $y";

        $RB1 = \DB::connection('kdumlerfootball')->select($queryx);
        $RB2 = \DB::connection('kdumlerfootball')->select($queryy);

        if ($RB1 > $RB2) {
            $result = $RB1 - $RB2;
        } else {
            $result = $RB2 - $RB1;
        }

        return "<h1> $RB1 had $result more yards than $RB2";
    })->where(['x' => '[0-9]?', 'y' => '[0-9]?']);


});


Route::group(['prefix' => 'LB'], function () {

    Route::get('/stats', 'positions@LB');                               //DONE
    Route::get('/compare/{x}/{y}', function ($x, $y) {                  //NEEDS TO CALCULATE
        $LB1 = DataBase::LB('TOTAL_YARDS')->where('NAME', "$x");
        $LB2 = DataBase::LB('TOTAL_YARDS')->where('NAME', "$y");

        if ($LB1 > $LB2) {
            $result = $LB1 - $LB2;
        } else {
            $result = $LB2 - $LB1;
        }

        return "<h1> $x had $result more yards than $y";
    })->where(['x' => '[A-Z]', 'x' => '[A-Z]']);

});

Route::group(['prefix' => 'WR'], function () {

    Route::get('/stats', 'positions@WR');                               //DONE
    Route::get('/compare/{x}/{y}', function ($x, $y) {                  //NEEDS TO CALCULATE
        $WR1 = DataBase::WR('TOTAL_YARDS')->where('NAME', "$x");
        $WR2 = DataBase::WR('TOTAL_YARDS')->where('NAME', "$y");

        if ($WR1 > $WR2) {
            $result = $WR1 - $WR2;
        } else {
            $result = $WR2 - $WR1;
        }

        return "<h1>$x  had $result more yards than $y";
    })->where(['x' => '[A-Z]', 'x' => '[A-Z]']);
});