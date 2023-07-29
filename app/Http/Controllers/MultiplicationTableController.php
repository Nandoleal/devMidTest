<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationTableController extends Controller
{
    public function index() {

        return view('multiplication-table');

    }

    public function generateTable(Request $request) {

        $number = $request->input('number');
        $table = $this->generateMultiplicationTable($number);

        return view('multiplication-table', compact('number', 'table'));

    }

    private function generateMultiplicationTable($number) {

        $table = [];
        for ($i = 1; $i <= 10; $i++) {
            $table[] = $number . ' x ' . $i . ' = ' . ($number * $i);
        }

        return $table;
    }
}
