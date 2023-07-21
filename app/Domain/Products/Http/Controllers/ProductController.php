<?php

namespace App\Domain\Products\Http\Controllers;

use App\Domain\Categories\Services\CategorieService;
use App\Domain\Product\Http\Requests\ProductRequest;
use App\Domain\Products\Services\ProductService;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Summary of __construct
     */
    public function __construct(
        public CategorieService $categorieService,
        public ProductService $productService
    ) {
    }

    /**
     * Summary of index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('products.products', ['products' => $this->productService->all()]);
    }

    /**
     * Summary of create
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('products.add', [
            'categories' => $this->categorieService->all(),
        ]);
    }

    /**
     * Summary of store
     *
     * @return void
     */
    public function store(ProductRequest $productRequest)
    {

        $this->productService->create($productRequest);

        return redirect()->route('product.index');

    }
}
