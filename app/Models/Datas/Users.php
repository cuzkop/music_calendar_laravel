<?php

namespace App\Models\Datas;

class Users
{

    const TABLE_NAME = 'users';

    public function __construct()
    {
    }

    public function fetchByUserId($userId)
    {
        $statement = \DB::table(self::TABLE_NAME)
                ->select('id')
                ->where('user_id', '=', $userId)
                ->get()
                ->toArray();

        return $statement;


    }
}
