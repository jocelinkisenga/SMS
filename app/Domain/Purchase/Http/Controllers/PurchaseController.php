<?php

namespace App\Domain\Purchase\Http\Controllers;

use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('purchase.purchases');
    }

    public function create()
    {
        return view('purchase.add');
    }
}
