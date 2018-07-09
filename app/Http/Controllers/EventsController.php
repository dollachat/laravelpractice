<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventsController extends Controller
{

    public function index()
    {
      
        $events = Event::simplePaginate(10);
     
        return view('events.index')->with('events', $events);
         
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        $event = Event::find($id);
        
        return view('events.show')->with('event', $event);
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
