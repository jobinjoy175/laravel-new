<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringcheckingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function checking(Request $request)
    {
        $request->validate([
            'master_string' => 'required|string',
            'string_1' => 'required|string',
            'string_2' => 'required|string',
            'string_3' => 'required|string',
            'string_4' => 'required|string',
        ]);
        $masterString = $request->input('master_string');
        $strings = [
            'String 1' => $request->input('string_1'),
            'String 2' => $request->input('string_2'),
            'String 3' => $request->input('string_3'),
            'String 4' => $request->input('string_4'),
        ];

        $res = $this->FormString($masterString, $strings);

        return view('index', ['results' => $res, 'inputs' => $request->all()]);
    }

    public function FormString($masterString, $strings)
    {
        $masterCharCount = count_chars($masterString, 1); //count chars

        $results = [];

        foreach ($strings as $key => $string) {  //iterating on 
            $canForm = true;
            $tempCharCount = $masterCharCount;

            foreach (count_chars($string, 1) as $char => $count) {
                if (!isset($tempCharCount[$char]) || $tempCharCount[$char] < $count) {
                    $canForm = false;
                    break;
                } else {
                    $tempCharCount[$char] -= $count;
                }
            }

            if ($canForm) {
                foreach (count_chars($string, 1) as $char => $count) {
                    $masterCharCount[$char] -= $count;
                }
            }

            $results[$key] = $canForm ? 'Yes' : 'No';
        }

        return $results;
    }
}
