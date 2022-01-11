<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
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
