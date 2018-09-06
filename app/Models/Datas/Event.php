<?php

namespace App\Models\Datas;

class Event
{

    const TABLE_NAME = 'Event';

    public function __construct()
    {
    }

    public function fetchEventByUserId($userId)
    {
        $returnData = [];
        $returnData[] = [
                            'artist_name' => 'Mr.Children',
                            'event_name' => 'Mr.Children Tour 2018-19',
                            'place' => '東京ドーム',
                            'start_date_time' => '2018-09-01 17:00:00',
                            'end_date_time' => '2018-09-01 20:00:00'
                        ];
        $returnData[] = [
                            'artist_name' => 'Mr.Children',
                            'event_name' => 'Mr.Children Tour 2018-19',
                            'place' => '東京ドーム',
                            'start_date_time' => '2018-09-02 17:00:00',
                            'end_date_time' => '2018-09-02 20:00:00'
                        ];
        $returnData[] = [
                            'artist_name' => 'Mr.Children',
                            'event_name' => 'Mr.Children Tour 2018-19',
                            'place' => '横浜アリーナ',
                            'start_date_time' => '2018-09-08 17:00:00',
                            'end_date_time' => '2018-09-08 20:00:00'
                        ];
        $returnData[] = [
                            'artist_name' => 'Mr.Children',
                            'event_name' => 'Mr.Children Tour 2018-19',
                            'place' => '横浜アリーナ',
                            'start_date_time' => '2018-09-09 17:00:00',
                            'end_date_time' => '2018-09-09 20:00:00'
                        ];
        return $returnData;




        // $targetColumns = [];
        // $targetColumns[] = 'a.artist_name';
        // $targetColumns[] = 'e.event_name';
        // $targetColumns[] = 'e.place';
        // $targetColumns[] = 'e.start_date_time';
        // $targetColumns[] = 'e.end_date_time';


        // $statement = \DB::table(self::TABLE_NAME . ' as e')
        //             ->select($targetColumns)
        //             ->join('artist as a', 'a.id', '=', 'e.artist_id')
        //             ->join('follow as f', 'f.artist_id', '=', 'e.artist_id')
        //             ->join('user as u', 'u.id', '=', 'f.user_id')
        //             ->where('u.id', '=', $userId)
        //             ->get()
        //             ->toArray();

        // return $statement;
    }
}
