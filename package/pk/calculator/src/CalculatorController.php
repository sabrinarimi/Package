<?php

namespace pk\calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CalculatorController extends Controller
{
    public function add($a,$b)
    {
      $result= $a + $b;
      return view('calculator::add',[
          'result'=>$result
      ]);
    }

    public function subtract($a,$b)
    {
        $result= $a - $b;
        return view('calculator::subtract',[
            'result'=>$result
        ]);
    }
}
