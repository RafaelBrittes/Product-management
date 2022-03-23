<?php

namespace App\Repositories;

use App\Traits\ApiResponser;
use App\Models\Product;

class ProductRepository extends BusinessLogic{
    use ApiResponser;

    protected $model = Product::class;

    public function updateProductTags($request){
        $selectedProduct = Product::with('tags')->find($request->id);

        if(!($request->addTag || $request->deleteTag) || $selectedProduct == null) return $this->error("Invalid request", 400);

        if($request->addTag){
            $selectedProduct->tags()->attach($request->addTag);

            return $this->success("Tags added to product ID {$request->id}");
        }
        
        $selectedProduct->tags()->detach($request->deleteTag);

        return $this->success("Tags deleted from product ID {$request->id}");
    }

    public function showSpecificProductTags($request){
        $selectedProduct = Product::with('tags')->find($request->id);
        return $selectedProduct->tags;
    }
}