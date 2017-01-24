<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Calander;
use Sentry;
use Redirect;

class CalanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $year = '2017';
        $month = 'january';
        $date = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

        $firstweek = array_slice($date, 0 , 7);
        $secondweek = array_slice($date, 7 , 7);
        $thirdweek = array_slice($date, 14 , 7);
        $fourthweek = array_slice($date, 21 , 7);
        $fifthweek = array_slice($date, 28 , 7);

        return view('calander/index')
        ->with('firstweek',$firstweek)
        ->with('secondweek',$secondweek)
        ->with('thirdweek',$thirdweek)
        ->with('fourthweek',$fourthweek)
        ->with('fifthweek',$fifthweek);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
        //dd(Input::all());
        $event = new Calander();
        $event->day = Input::get('id');
        $event->user_id = Sentry::getUser()->id;
        $event->title = Input::get('eventtitle');
        $event->location = Input::get('eventlocation');
        $event->notes = Input::get('eventnotes');
        $event->save();

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $events = Calander::where('user_id',Sentry::getUser()->id)->where('day',$id)->get();
        return view('calander.show')
        ->with('id',$id)
        ->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {


        $event = Calander::find($id);
        //dd($id);
        $event->title = Input::get('eventtitle');
        $event->location = Input::get('eventlocation');
        $event->notes = Input::get('eventnotes');

        if(Sentry::getUser()->id == Input::get('user_id'))
        {
            $event->save();
        }

        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        //dd(Input::get('id'));
        $event = Calander::findOrFail(Input::get('id'));
        $event->delete();

        return Redirect::back();
    }
}
