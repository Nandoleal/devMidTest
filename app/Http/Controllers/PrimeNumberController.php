<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller{

    public function isPrimeNumber($number){
        if ($number < 2){
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++){
            if($number % $i == 0){
                return false;
            }
        }

        return true;
    }

    public function printFirstPrimesNumber(){
        $count = 0;
        $number = 2;

        $primeNumbers = [];

        while ($count < 10) {
            if ($this->isPrimeNumber($number)){
                $primeNumbers[] = $number;
                $count++;
            }
            $number++;
        }

        return view('prime-numbers', compact('primeNumbers'));

    }
}
