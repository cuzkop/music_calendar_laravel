<?php

namespace App\Models\Datas;

class Event
{

    const TABLE_NAME = 'event';


    public function __construct()
    {
    }

    public function fetchEventByUserId($userId)
    {
        $targetColumns = [];
        $targetColumns[] = 'e.id';
        $targetColumns[] = 'a.artist_name';
        $targetColumns[] = 'e.event_name';
        $targetColumns[] = 'e.place';
        $targetColumns[] = 'e.start_date_time';
        $targetColumns[] = 'e.end_date_time';


        $statement = \DB::table(self::TABLE_NAME . ' as e')
                    ->select($targetColumns)
                    ->join('artist as a', 'a.artist_id', '=', 'e.artist_id')
                    ->join('follow as f', 'f.artist_id', '=', 'e.artist_id')
                    ->join('users as u', 'u.id', '=', 'f.user_id')
                    ->join('calendar as c', 'c.event_id', '=', 'e.id')
                    ->where('u.id', '=', $userId->id)
                    ->where('c.is_rejected', '=', Calendar::UNREJECTED_INT)
                    ->where('c.is_added', '=', Calendar::ADDED_INT)
                    ->orderby('e.start_date_time')
                    ->get()
                    ->toArray();

        return $statement;

    }

    public function fetchUnChengedEventByUserId($userId)
    {

        $targetColumns = [];
        $targetColumns[] = 'e.id';
        $targetColumns[] = 'a.artist_name';
        $targetColumns[] = 'e.event_name';
        $targetColumns[] = 'e.place';
        $targetColumns[] = 'e.start_date_time';
        $targetColumns[] = 'e.end_date_time';


        $statement = \DB::table(self::TABLE_NAME . ' as e')
                    ->select($targetColumns)
                    ->join('artist as a', 'a.artist_id', '=', 'e.artist_id')
                    ->join('follow as f', 'f.artist_id', '=', 'e.artist_id')
                    ->join('users as u', 'u.id', '=', 'f.user_id')
                    ->join('calendar as c', 'c.event_id', '=', 'e.id')
                    ->where('c.user_id', '=', $userId->id)
                    ->where('c.is_rejected', '=', Calendar::UNREJECTED_INT)
                    ->where('c.is_added', '=', Calendar::UNADDED_INT)
                    ->orderby('e.start_date_time')
                    ->get()
                    ->toArray();

        return $statement;
    }

    public function fetchId($id)
    {
        return \DB::table(self::TABLE_NAME)
            ->select('id')
            ->where('artist_id', '=', $id['artist_id'])
            ->orderby('id', 'desc')
            ->limit(1)
            ->get()
            ->toArray();
    }

    public function insert($insertData)
    {
        return \DB::table(self::TABLE_NAME)
            ->insert($insertData);
    }
}
