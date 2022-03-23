<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TagRepository;

class TagController extends Controller
{

    public function showtags(TagRepository $repository){
        return $repository->getAll();
    }

    public function createTag(Request $request, TagRepository $repository){
        $repository->validateName($request);

        return $repository->create($request);
    }

    public function updateTag(Request $request, TagRepository $repository){
        $repository->validateName($request);

        return $repository->update($request);
    }

    public function showSpecificTag(Request $request, TagRepository $repository){
        return $repository->getByID($request->id);
    }

    public function deleteTag(Request $request, TagRepository $repository){
        return $repository->delete($request->id);
    }

}