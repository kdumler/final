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




Route::get('/roster', 'general@roster');




Route::get('/total', 'general@total');



//Route::group(['prefix' => 'LB']), function (){

Route::get('/RB/stats', 'positions@RB');
Route::get('/RB/compare/{x}/{y}', function ($x, $y){
    $RB1 = DataBase::RB('TOTAL_YARDS')-> where('NAME', "$x");
    $RB2 = DataBase::RB('TOTAL_YARDS') -> where('NAME', "$y");

    if($RB1 > $RB2){
        $result = $RB1 - $RB2;
    }else{
        $result = $RB2 - $RB1;
    }

    return "<h1> $x had $result more yards than $y";
})->where(['x'=> '[A-Z]', 'x'=> '[A-Z]']);





    Route::get('/LB/stats', 'positions@LB');
    Route::get('/LB/compare/{x}/{y}', function ($x, $y) {
        $LB1 = DataBase::LB('TOTAL_YARDS')->where('NAME', "$x");
        $LB2 = DataBase::LB('TOTAL_YARDS')->where('NAME', "$y");

        if ($LB1 > $LB2) {
            $result = $LB1 - $LB2;
        } else {
            $result = $LB2 - $LB1;
        }

        return "<h1> $x had $result more yards than $y";
    })->where(['x' => '[A-Z]', 'x' => '[A-Z]']);




Route::get('/WR/stats', 'positions@WR');
Route::get('/WR/compare/{x}/{y}', function ($x, $y){
    $WR1 = DataBase::WR('TOTAL_YARDS')-> where('NAME', "$x");
    $WR2 = DataBase::WR('TOTAL_YARDS') -> where('NAME', "$y");

    if($WR1 > $WR2){
        $result = $WR1 - $WR2;
    }else{
        $result = $WR2 - $WR1;
    }

    return "<h1>$x  had $result more yards than $y";
})->where(['x'=> '[A-Z]', 'x'=> '[A-Z]']);
