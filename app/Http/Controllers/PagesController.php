<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        $year = '2017';
        $month = 'january';
        $date = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

        $firstweek = array_slice($date, 0 , 7);
        $secondweek = array_slice($date, 7 , 7);
        $thirdweek = array_slice($date, 14 , 7);
        $fourthweek = array_slice($date, 21 , 7);
        $fifthweek = array_slice($date, 28 , 7);

        return view('pages.home')
        ->with('firstweek',$firstweek)
        ->with('secondweek',$secondweek)
        ->with('thirdweek',$thirdweek)
        ->with('fourthweek',$fourthweek)
        ->with('fifthweek',$fifthweek);
    }
}
