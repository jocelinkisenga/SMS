<?php

namespace App\Domain\Home\Http\Controllers;

use App\Domain\Home\Services\HomeService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(public HomeService $homeService)
    {

    }

    public function index()
    {
        return view('home.index');
    }
}
