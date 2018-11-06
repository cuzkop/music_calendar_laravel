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

class nortification extends Model
{

    /**
     * カレンダー取得
     */
    public function getCalendar($userId)
    {
        $usersObj = new Data\Users();
        $eventObj = new Data\Event();
        $calendarObj = new Data\Calendar();
        $id = $usersObj->fetchByUserId($userId);
        $event = $eventObj->fetchUnChengedEventByUserId($id[0]);
        foreach ($event as $key => $value) {
            $date = $this->fixStartDate($value->start_date_time);
            $time = $this->fixEndDate($value->start_date_time);
            unset($event[$key]->start_date_time, $event[$key]->end_date_time);
            $event[$key]->date = $date;
            $event[$key]->time = $time;
        }
        return $event;
    }


    private function fixEndDate($value)
    {
        $datetime = new Carbon($value);
        $data = $datetime->format('H:i');
        return $data;

    }

    private function fixStartDate($value)
    {
        $datetime = new Carbon($value);
        $data = $datetime->format('Y/m/d');
        return $data;
    }

    /**
     * 日程を通知画面から追加するかどうか
     */
    public function dataUpdate($request)
    {
        $calendarObj = new Data\Calendar();
        $usersObj = new Data\Users();
        $id = $usersObj->fetchByUserId('kzk0829');
        if (isset($request['add']) == true) {
            $result = $calendarObj->addUpdate($request, $id);
        } else {
            $result = $calendarObj->rejectUpdate($request, $id);
        }
        return $result;
    }





}
