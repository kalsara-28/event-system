<?php

namespace App\Http\Controllers;
class EventController extends Controller{
public function show($id)
{
    $event = Event::findOrFail($id);
    return view('events.details', compact('event'));
}

}