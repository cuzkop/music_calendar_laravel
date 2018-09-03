<?php

namespace App\Models\Services\calendar;

use Illuminate\Database\Eloquent\Model;

class calendar extends Model
{
    public function getCalendar()
    {
        $hello = 'hello,world';
        return $hello;
    }
}
