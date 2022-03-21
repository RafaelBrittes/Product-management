<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class ProductController extends Controller
{
    use ApiResponser;
    
    public function showProducts(ProductRepository $repository){
        return $repository->getAll();
    }

    public function createProduct(Request $request, ProductRepository $repository){
        return $repository->create($request);
    }

    public function updateProduct(Request $request, ProductRepository $repository){
        return $repository->update($request);
    }

    public function showSpecificProduct(Request $request, ProductRepository $repository){
        return $repository->getByID($request->id);
    }

    public function deleteProduct(Request $request, ProductRepository $repository){
        return $repository->delete($request->id);
    }

    public function updateProductTags(Request $request, ProductRepository $repository){
        return $repository->updateProductTags($request);
    }
}