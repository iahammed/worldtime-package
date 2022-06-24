<?php

namespace Dfytech\Worldtime\Traits;

use Illuminate\Support\Facades\Http;

trait ApiCallTrait {

    /** 
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function timezones()
    {
        $url = config('worldtime.timezone');
        try {
            return Http::get($url)->throw()->json();
        } catch(\Throwable $throable) {
            return response()->json('could not get data', 404);
        }
    }

    /** 
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function timezone($timeZone = '')
    {
        $url = config('worldtime.timezone') . '/' . $timeZone;
        try {
            return Http::get($url)->throw()->json();
        } catch (\Throwable $throable) {
            return response()->json('could not get data', 404);
        }
    }   

  }