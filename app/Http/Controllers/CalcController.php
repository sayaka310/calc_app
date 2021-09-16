<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1 , $operator , $num2)
    {
        $result = '';

        if ($operator == 'addition' ) {
            $result = $num1 + $num2;

        } elseif ($operator == 'subtraction' ) {
            $result = $num1 - $num2;

        } elseif ($operator == 'multiplication' ) {
            $result = $num1 * $num2;

        } elseif ($operator == 'division' ) {
            $result = $num1 / $num2;

        } else {
            $result ='正しい演算子を指定して下さい';
        } 

        return view('message.calc', ['result' => $result]);
    }
}
