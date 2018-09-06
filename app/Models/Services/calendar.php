<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Validator;
use App\Models\Services as Service;
use App\Models\Datas as Data;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class calendar extends Model
{

    public function __construct()
    {
    }

    public function index()
    {
        $hello = 'hello,world';
        return $hello;
    }

    public function getCalendar($userId)
    {
        $eventObj = new Data\Event();
        $event = $eventObj->fetchEventByUserId($userId);
        foreach ($event as $key => $value) {
            $event[$key]['start_date_time'] = $this->fixDate($value['start_date_time']);
            $event[$key]['end_date_time'] = $this->fixDate($value['end_date_time']);
        }
        return $event;
    }

    private function fixDate($value)
    {
        $time = explode(' ', $value);
        $splitDate = explode('-', $time[0]);
        $date['year'] = $splitDate[0];
        $date['month'] = $splitDate[1];
        $date['day'] = $splitDate[2];
        $splitTime = explode(':', $time[1]);
        $date['hour'] = $splitTime[0];
        $date['minute'] = $splitTime[1];

        return $date;
    }
}
