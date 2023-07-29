<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function index() {

        return view('check-palindrome');

    }

    public function check(Request $request) {

        $word = $request->input('word');
        $isPalindrome = $this->isPalindrome($word);

        return view('check-palindrome', compact('word', 'isPalindrome'));

    }

    private function isPalindrome($word) {

        $cleanWord = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($word));
        $reverseWord = strrev($cleanWord);

        return $cleanWord === $reverseWord;

    }
}
