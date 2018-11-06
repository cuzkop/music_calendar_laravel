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

    /**
     * user_idを元にカレンダー取得
     */
    public function getCalendar($userId)
    {
        $usersObj = new Data\Users();
        $eventObj = new Data\Event();
        $id = $usersObj->fetchByUserId($userId);
        $event = $eventObj->fetchEventByUserId($id[0]);
        foreach ($event as $key => $value) {
            $date = $this->fixStartDate($value->start_date_time);
            $time = $this->fixEndDate($value->start_date_time);
            unset($event[$key]->start_date_time, $event[$key]->end_date_time);
            $event[$key]->date = $date;
            $event[$key]->time = $time;
            $event[$key]->todayFlg = 0;
            $event[0]->todayFlg = 1;
        }
        return $event;
    }

    /**
     * 終了時刻修正
     */
    private function fixEndDate($value)
    {
        $datetime = new Carbon($value);
        $data = $datetime->format('H:i');
        return $data;

    }

    /**
     * 開始時刻修正
     */
    private function fixStartDate($value)
    {
        $datetime = new Carbon($value);
        $data = $datetime->format('Y/m/d');
        return $data;
    }
}
