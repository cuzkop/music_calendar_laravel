<?php

namespace App\Http\Controllers\Follow;

use Illuminate\Http\Request;
use App\Models\Services as Service;
use App\Http\Controllers\Controller;
use App\Models\Data as Data;
use Illuminate\Support\Facades\Log;
use Exception;


class FollowController extends Controller

{
    public function index()
    {
        $data = "hello";
        return view('follow', compact('data'));
    }

    public function result(Request $request)
    {
        return view('search', compact('request'));
    }

    public function follow(Request $request)
    {
        $followObj = new Service\follow();
        try {
            $data = $followObj->follow($request);
        } catch (\Exception $e) {
            Log::error(__FILE__ . __LINE__ . ' message: ' . $e->getMessage());
            $data['error_message'] = $e->getMessage();
        }
        return view('follow', compact('data'));
    }


}
