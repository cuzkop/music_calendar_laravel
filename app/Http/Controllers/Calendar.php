<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services as Service;

class Calendar extends Controller
{
    public function index(Request $request)
    {
        $calendarObj = new Service\calendar()
        $data = $calendarObj->getCalendar($request);
    }
}
