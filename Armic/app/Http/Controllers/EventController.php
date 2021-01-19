<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $date = Event::all();
        
        return view('eventlist/eventlist')->with('date',$date);
    }
}
