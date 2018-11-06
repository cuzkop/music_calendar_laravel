<?php

namespace App\Models\Datas;

class Artist
{

    const TABLE_NAME = 'artist';

    public function __construct()
    {
    }

    public function fetchall()
    {
        $statement = \DB::table(self::TABLE_NAME)
                ->select()
                ->get()
                ->toArray();

        return $statement;
    }




    public function fetchByName($artistName)
    {
        // $returnData = ['artist_id' => '1'];

        // return $returnData;
        $statement = \DB::table(self::TABLE_NAME)
                ->select('artist_id')
                ->where('artist_name', '=', $artistName)
                ->get()
                ->toArray();

        return $statement;

    }

    public function insert($insertData)
    {
        return \DB::table(self::TABLE_NAME)
            ->insert($insertData);
    }
}
