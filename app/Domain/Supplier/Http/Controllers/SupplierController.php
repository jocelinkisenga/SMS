<?php

namespace App\Domain\Supplier\Http\Controllers;

use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function index()
    {

    }

    public function create(){
        return view("people.supplier.add");
    }
}
