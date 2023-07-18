<?php

namespace App\Domain\Categories\Http\Controllers;

use App\Domain\Categories\Http\Requests\CategorieRequest;
use App\Domain\Categories\Services\CategorieService;
use App\Http\Controllers\Controller;

class CategorieController extends Controller
{
    public function __construct(public CategorieService $categorieService)
    {
    }

    public function index()
    {
        $categories = $this->categorieService->all();

        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.add');
    }

    public function store(CategorieRequest $categorieRequest)
    {

        $this->categorieService->store($categorieRequest);

        return redirect()->route('categories');

    }
}
