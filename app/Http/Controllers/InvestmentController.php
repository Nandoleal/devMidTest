<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index() {

        return view('calculate-investment');

    }

    public function calculate(Request $request) {

        $initialCapital = (float) $request->input('initialCapital');
        $interestRate = (float) $request->input('interestRate') / 100;
        $investmentTimeMonths = (int) $request->input('investmentTimeMonths');

        $finalValue = $this->calculateFinalValue($initialCapital, $interestRate, $investmentTimeMonths);

        return view('calculate-investment', compact('initialCapital', 'interestRate', 'investmentTimeMonths', 'finalValue'));

    }

    private function calculateFinalValue($initialCapital, $interestRate, $investmentTimeMonths) {

        $finalValue = $initialCapital * (1 + $interestRate) ** $investmentTimeMonths;
        return $finalValue;
    }
}
