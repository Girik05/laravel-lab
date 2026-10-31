<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about', [
            'name'  => 'Girik Sagar',
            'roll'  => 31,
            'regNo' => 'NSS23CS031',
        ]);
    }
}
