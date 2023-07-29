<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VowelCountController extends Controller
{
    public function index() {

        return view('vowel-count');

    }

    public function countVowels(Request $request) {

        $sentence = $request->input('sentence');
        $vowelCount = $this->countVowelsInSentence($sentence);

        return view('vowel-count', compact('sentence', 'vowelCount'));

    }

    private function countVowelsInSentence($sentence) {


        $lowercaseSentence = strtolower($sentence);


        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        for ($i = 0; $i <strlen($lowercaseSentence); $i++) {
            if(in_array($lowercaseSentence[$i], $vowels)) {
                $count++;
            }
        }

        return $count;
    }
}
