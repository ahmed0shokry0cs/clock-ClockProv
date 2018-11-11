<?php

namespace Clock\ClockProve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClockFacade extends Controller
{
    public static function clock(){
      //return Date('d/m/y');
      return config('clock_config');
    }
}
