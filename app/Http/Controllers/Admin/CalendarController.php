<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('admin.calendar');
    }


    public function manageEvents(Request $request)
    {
        switch ($request->type) {
            case 'create':
                $calendarEvent = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($calendarEvent);
                break;

            case 'edit':
                $calendarEvent = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($calendarEvent);
                break;

            case 'delete':
                $calendarEvent = Event::find($request->id)->delete();

                return response()->json($calendarEvent);
                break;

            default:
                break;
        }
    }
}
