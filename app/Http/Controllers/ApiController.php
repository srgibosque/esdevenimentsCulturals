<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getEvent($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        return response()->json($event->getAttributes());
    }

    public function getEvents($page)
    {
        $events = Event::paginate(10, ['id', 'name', 'date'], 'page', $page);

        // Return name, id, and date of each event
        return response()->json([
            'data' => $events->items()
        ]);
    }
}
