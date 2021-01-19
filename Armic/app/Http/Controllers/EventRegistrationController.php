<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;


class EventRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eventlist/eventRegistration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Postモデルのインスタンスを作成する
        $post = new Event();
        
        $post->name = $request->name;
        $post->phone_number = $request->phone_number;
        $post->event_name = $request->event_name;
        $post->event_day = $request->event_day;
        $post->event_venue = $request->event_venue;
        $post->event_introduction = $request->event_introduction;

        $post->event_image = $request->event_image;
        
        
        $post->event_fee = $request->event_fee;
        $post->ticket_where = $request->ticket_where;
        $post->event_contact = $request->event_contact;

        
        
        $post->save();

        $date = Event::all();
                
        return view('/eventlist/eventlist')->with('date',$date);
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('event_image')->store('public/image');

        #この下に追加する

        $image = str_replace('public/image/', '', $image);

        $image = new Event;
        $image->file = $image;

        $image->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
