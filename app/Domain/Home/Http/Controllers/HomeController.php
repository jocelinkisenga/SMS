<?php

namespace App\Domain\Home\Http\Controllers;

use App\Domain\Home\Services\HomeService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(HomeService $homeService)
    {
        dd($homeService->countMyProducts());
    }
}
