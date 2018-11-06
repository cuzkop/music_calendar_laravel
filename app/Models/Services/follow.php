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

class follow extends Model
{
    const ERROR_MESSAGE = [
        'follow_error' => 'すでにフォローしているアーティストです。',
    ];

    public function __construct()
    {
    }

    public function index()
    {
        $hello = 'hello,world';
        return $hello;
    }

    /**
     * フォロー機能
     */
    public function follow($request)
    {
        $followObj = new Data\Follow();
        $artistName = $request->all();
        $data = ['artist_name' => $artistName['artist_name'], 'user_id' => '1'];
        $insertData = $this->createInsertData($data);
        $checkFollows = $followObj->fetchFollowInfo($insertData);
        if (count($checkFollows) > 0) {
            throw new Exception(self::ERROR_MESSAGE["follow_error"]);
        }
        $result = $followObj->insert($insertData);
        $message = $data['artist_name'] . 'のフォローに失敗しました';
        if ($result == true) {
            $message = $data['artist_name'] . 'のフォローに成功しました';
        }
        return $message;
    }

    /**
     * テーブルにinsertするための整形
     */
    private function createInsertData($data)
    {
        $artistObj = new Data\Artist();
        $artist_id = $artistObj->fetchByName($data['artist_name']);
        $insertData['artist_id'] = $artist_id[0]->artist_id;
        $insertData['user_id'] = $data['user_id'];

        return $insertData;
    }

}
