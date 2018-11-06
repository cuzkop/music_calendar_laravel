<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Models\Services as Service;
use App\Http\Controllers\Controller;
use App\Models\Datas as Data;
use Illuminate\Support\Facades\Log;
use Exception;


class MasterController extends Controller

{
    public function index()
    {
        $artistObj = new Data\Artist();
        $data = $artistObj->fetchall();
        return view('master', compact('data'));
    }

    public function insertArtist(Request $request)
    {
        $artistObj = new Data\Artist();
        $result = $artistObj->insert($request->all());
        $data = $artistObj->fetchall();
        return view('master', compact('data'));
    }

    public function insertEvent(Request $request)
    {
        $eventObj = new Data\Event();
        $artistObj = new Data\Artist();
        $calendarObj = new Data\Calendar();
        $result = $eventObj->insert($request->all());
        $insertData = $eventObj->fetchId($request->all());
        $insertData = [
            'user_id' => 1,
            'event_id' => $insertData[0]->id,
            'is_added' => 0,
            'is_rejected' => 0
        ];
        $result = $calendarObj->insert($insertData);
        $data = $artistObj->fetchall();
        return view('master', compact('data'));
    }

}
