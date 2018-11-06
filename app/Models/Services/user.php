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

class user extends Model
{

    public function __construct()
    {
    }

    /**
     * そのユーザーのフォロー中情報取得
     */
    public function getInfo($request)
    {
        $usersObj = new Data\Users();
        $followObj = new Data\Follow();
        $userId = $usersObj->fetchByUserId($request);
        $data = $followObj->fetchArtistById($userId);
        return $data;
    }

    /**
     * フォロー解除
     */
    public function infoUpdate($request)
    {
        $followObj = new Data\Follow();
        $data = $followObj->delete($request);
        return $data;
    }
}
