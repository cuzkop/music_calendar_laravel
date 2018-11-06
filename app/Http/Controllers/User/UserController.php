<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Services as Service;
use App\Http\Controllers\Controller;
use App\Models\Data as Data;
use Illuminate\Support\Facades\Log;
use Exception;


class UserController extends Controller
{
    public function getInfo(Request $request)
    {
        $request = 'kzk0829';
        $userObj = new Service\user();
        $data = $userObj->getInfo($request);
        return view('userInfo', compact('data'));
    }

    public function update(Request $request)
    {
        $userObj = new Service\user();
        $result = $userObj->infoUpdate($request->all());
        $data = $userObj->getInfo('kzk0829');
        return view('userInfo', compact('data'));
    }

}
