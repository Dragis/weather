<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class MainController
{
    public function index()
    {
        return view('index');
    }
}