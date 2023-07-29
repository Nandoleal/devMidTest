<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index() {

        return view('calculate-average');

    }

    public function calculateAverage(Request $request) {

        $grades = [
            'subjectA' => (float)$request->input('subjectA'),
            'subjectB' => (float)$request->input('subjectB'),
            'subjectC' => (float)$request->input('subjectC'),
        ];

        $average = array_sum($grades) / count($grades);

        return view('calculate-average', compact('grades', 'average'));

    }
}
