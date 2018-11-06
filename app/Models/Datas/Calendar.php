<?php

namespace App\Models\Datas;

class Calendar
{

    const TABLE_NAME = 'calendar';
    const UNREJECTED_INT = 0;
    const UNADDED_INT = 0;
    const ADDED_INT = 1;

    public function __construct()
    {
    }

    public function fetchCalendarByUserId($userId)
    {
        $targetColumns = [];
        $targetColumns[] = 'e.id';
        $targetColumns[] = 'a.artist_name';
        $targetColumns[] = 'e.event_name';
        $targetColumns[] = 'e.place';
        $targetColumns[] = 'e.start_date_time';
        $targetColumns[] = 'e.end_date_time';

        $statement = \DB::table(self::TABLE_NAME . ' as c')
            ->select($targetColumns)
            ->join('users as u', 'u.id', '=', 'c.user_id')
            ->join('follow as f', 'f.user_id', '=', 'c.user_id')
            ->join('artist as a', 'a.artist_id', '=', 'f.artist_id')
            ->join('event as e', 'a.artist_id', '=', 'e.artist_id')
            ->where('c.user_id', '=', $userId->id)
            ->where('c.is_rejected', '=', 0)
            ->where('c.is_added', '=', 0)
            ->orderby('e.start_date_time')
            ->get()
            ->toArray();

        return $statement;

    }

    public function addUpdate($data, $id)
    {
        return \DB::table(self::TABLE_NAME)
            ->where('user_id', '=', $id[0]->id)
            ->where('event_id', '=', $data['id'])
            ->update(['is_added' => 1]);
    }

    public function rejectUpdate($data, $id)
    {
        return \DB::table(self::TABLE_NAME)
            ->where('user_id', '=', $id[0]->id)
            ->where('event_id', '=', $data['id'])
            ->update(['is_rejected' => 1]);
    }

    public function insert($data)
    {
        return \DB::table(self::TABLE_NAME)
            ->insert($data);
    }

}
