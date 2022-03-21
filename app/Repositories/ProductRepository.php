<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BusinessLogic{

    protected $model = Product::class;

    public function updateProductTags($request){
        $selectedProduct = Product::with('tags')->find($request->id);
        if($request->addTag){
            $selectedProduct->tags()->attach($request->addTag);

            return $this->success([], "Tags added to product ID {$request->id}");
        }else if($request->deleteTag){
            $selectedProduct->tags()->detach($request->deleteTag);

            return $this->success([], "Tags deleted from product ID {$request->id}");
        }
    }
}