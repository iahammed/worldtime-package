<?php

namespace Dfytech\Worldtime\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dfytech\Worldtime\Traits\ApiCallTrait;


class WorldTimeController extends Controller
{

    use ApiCallTrait;

    public $timezones;
    public $time;

    public function __construct()
    {
        $this->timezones = $this->timezones();
        $this->time = [];
    }
    
    public function index()
    {
        return view('worldtime::index')
            ->with('timezones', $this->timezones)
            ->with('time', $this->time);
    }

    public function getTime(Request $request)
    {
        $this->time = $this->timezone($request->timeZone);
        return view('worldtime::index')
            ->with('timezones', $this->timezones)
            ->with('time', $this->time);
    }

}