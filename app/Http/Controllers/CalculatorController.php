<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller{

    public function index(){
        return view('calculator');
    }

    public function calculate(Request $request){

        $number_A = $request->input('number_A');
        $number_B = $request->input('number_B');
        $operator = $request->input('operator');

        $result = 0;

        switch ($operator) {
            case '+':
                $result = $number_A + $number_B;
                break;
            case '-':
                $result = $number_A - $number_B;
                break;
            case '*':
                $result = $number_A * $number_B;
                break;
            case '/':
                $result = $number_A / $number_B;
                break;
            default:
                return redirect('/calculator')->with('error', 'Invalid operator, please try again!');

        }

        return redirect('/calculator')->with('result', $result);

    }
}
