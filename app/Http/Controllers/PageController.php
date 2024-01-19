<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PageController extends Controller
{
  public function home(){

    $events = Event::paginate(5);

    return view('welcome', compact('events'));
  }

  public function viewSingleEvent($id){

    $singleEvent = Event::findOrFail($id);

    return view('event', compact('singleEvent'));
  }
}