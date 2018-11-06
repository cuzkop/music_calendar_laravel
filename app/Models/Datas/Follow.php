<?php

namespace App\Models\Datas;

class Follow
{

    const TABLE_NAME = 'follow';

    public function __construct()
    {
    }

    public function insert($insertData)
    {
        return \DB::table(self::TABLE_NAME)
            ->insert($insertData);
    }

    public function fetchArtistById($userId)
    {
        $targetColumns = [];
        $targetColumns[] = 'f.artist_id';
        $targetColumns[] = 'f.user_id';
        $targetColumns[] = 'a.artist_name';

        return \DB::table(self::TABLE_NAME . ' as f')
            ->select($targetColumns)
            ->join('artist as a', 'a.artist_id', '=', 'f.artist_id')
            ->where('f.user_id', '=', $userId[0]->id)
            ->get()
            ->toArray();
    }

    public function delete($ids)
    {
        return \DB::table(self::TABLE_NAME)
            ->where('user_id', '=', $ids['user_id'])
            ->where('artist_id', '=', $ids['artist_id'])
            ->delete();
    }

    public function fetchFollowInfo($data)
    {
        return \DB::table(self::TABLE_NAME)
            ->select()
            ->where('user_id', '=', $data['user_id'])
            ->where('artist_id', '=', $data['artist_id'])
            ->get()
            ->toArray();
    }
}
