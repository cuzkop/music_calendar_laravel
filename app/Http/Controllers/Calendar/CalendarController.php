<?php

namespace App\Http\Controllers\Calendar;

use Illuminate\Http\Request;
use App\Models\Services as Service;
use App\Http\Controllers\Controller;
use App\Models\Data as Data;
use Illuminate\Support\Facades\Log;
use Exception;


class CalendarController extends Controller

{
    public function index()
    {
        $calendarObj = new Service\calendar();
        $data = $calendarObj->index();
        return view('input', compact('data'));

    }

    public function getCalendar(Request $request)
    {
        $calendarObj = new Service\calendar();
        $data = $calendarObj->getCalendar('kzk0829');
        return view('calendar', compact('data'));
    }

    public function update(Request $request)
    {
        $nortificationObj = new Service\nortification();
        $calendarObj = new Service\calendar();
        $result = $nortificationObj->dataUpdate($request->all());
        $data = $calendarObj->getCalendar('kzk0829');
        return view('calendar', compact('data'));
    }

}
