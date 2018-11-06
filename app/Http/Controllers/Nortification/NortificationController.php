<?php

namespace App\Http\Controllers\Nortification;

use Illuminate\Http\Request;
use App\Models\Services as Service;
use App\Http\Controllers\Controller;
use App\Models\Datas as Data;
use Illuminate\Support\Facades\Log;
use Exception;


class NortificationController extends Controller
{

    const ERROR_MESSAGES = [
        'db_error' => 'DBエラーです'
    ];

    public function index(Request $request)
    {
        $nortificationObj = new Service\nortification();
        $data = $nortificationObj->getCalendar('kzk0829');
        return view('nortification', compact('data'));
    }

    public function update(Request $request)
    {
        $nortificationObj = new Service\nortification();
        $result = $nortificationObj->dataUpdate($request->all());
        if ($result != 1) {
            throw new Exception(self::ERROR_MESSAGES['db_error']);
        }
        $data = $nortificationObj->getCalendar('kzk0829');
        return view('nortification', compact('data'));
    }

}
