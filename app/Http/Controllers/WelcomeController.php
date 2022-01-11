<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $creationPatterns = [
            [
                'name' => '#creational',
                'link' => '##'
            ]
        ];

        $structuralPatterns = [
            [
                'name' => '#structural',
                'link' => '##'
            ]
        ];

        $behavioralPatterns = [
            [
                'name' => '#behavioral',
                'link' => '##'
            ]
        ];

        $morePatterns = [
            [
                'name' => '#more',
                'link' => '##'
            ]
        ];

        return view('welcome', compact(
            'creationPatterns',
            'structuralPatterns',
            'behavioralPatterns',
            'morePatterns'
        ));
    }
}
