<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PageController extends Controller
{
  public function home(){

    $events = Event::all();

    return view('welcome', compact('events'));
  }
}