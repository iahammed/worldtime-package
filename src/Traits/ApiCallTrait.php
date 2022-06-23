<?php

namespace Dfytech\Worldtime\Traits;

use Illuminate\Support\Facades\Http;

trait ApiCallTrait {
    
    public function timezones()
    {
        $url = config('worldtime.timezone');
        try {
            return Http::get($url)->throw()->json();
        } catch(\Throwable $throable) {
            return 'could not get data';
        }
    }

    public function timezone($timeZone = '')
    {
        $url = config('worldtime.timezone') . '/' . $timeZone;
        try {
            return Http::get($url)->throw()->json();
        } catch (\Throwable $throable) {
            return 'could not get data';
        }
    }   

  }