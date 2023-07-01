<?php

namespace App\Domain\Products\Http\Controllers;

use App\Domain\Categories\Services\CategorieService;
use App\Domain\Product\Http\Requests\ProductRequest;
use App\Domain\Products\Services\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(
        public CategorieService $categorieService,
        public ProductService $productService
    ) {

    }
    public function index(){
        return view("products.products");
    }

    public function create() {

       return  view("products.add", [
        "categories" => $this->categorieService->all()
       ]);
    }

    public function store(ProductRequest $productRequest,){
        $this->productService->create($productRequest);

    }

}
