<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    public function index() {

        return view('factorial');

    }

    public function calculate(Request $request) {

        $number = $request->input('number');
        $factorial = $this->calculateFactorial($number);

        return view('factorial', compact('number', 'factorial'));

    }

    private function calculateFactorial($number) {

        if($number < 0) {
            return null;
        }

        if($number == 0 || $number == 1) {
            return 1;
        }

        $result = 1;
        for($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }

        return $result;
    }
}
