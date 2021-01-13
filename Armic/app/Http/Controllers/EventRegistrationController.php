<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
    public function create(array $data)
    {
        // $event = new event;
        // $event->
        // $event->save();
        return Event::create([
           'name' => $data['name'],
           'phone_number' => $data['phone_number'],
           'event_name' => $data['event_name'],
           'event_day' => $data['event_day'],
           'event_venue' => $data['event_venue'],
           'event_introduction' => $data['event_introduction'],
           'event_image' => $data['event_image'],
           'event_fee' => $data['event_fee'],
           'ticket_where' => $data['ticket_where'],
           'event_contact' => $data['event_contact'],
           

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
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
