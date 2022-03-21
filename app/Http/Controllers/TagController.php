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
        $attr = $this->validateName($request->name);

        return $repository->create($attr);
    }

    public function updateTag(Request $request, TagRepository $repository){
        $attr = $this->validateName($request->name);

        return $repository->update($attr);
    }

    public function showSpecificTag(Request $request, TagRepository $repository){
        return $repository->getByID($request->id);
    }

    public function deleteTag(Request $request, TagRepository $repository){
        return $repository->delete($request->id);
    }

    public function validateName($name){
        $attr = $name->validate([
            'name' => 'required|string|max:60',
        ]);
        return $attr;
    }
}
