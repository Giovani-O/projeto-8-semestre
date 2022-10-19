<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipes;

class RecipesController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...

        $recipes = new Recipes;

        $recipes->name = $request->name;
        $recipes->description = $request->description;
        $recipes->ingredients = json_encode($request->ingredients);
        $recipes->preparation = json_encode($request->preparation);
        $recipes->preparationTime = $request->preparationTime;
        $recipes->quantity = $request->quantity;

        $recipes->save();
    }

    public function deleteById(Request $request)
    {
        $recipes = new Recipes;

        $recipes->deleteById($request->id);
    }

    public function getById(Request $request) 
    {
        $recipes = new Recipes;

        return $recipes->getById($request->id);
    }

    public function getByName(Request $request) 
    {
        $recipes = new Recipes;

        return $recipes->getByName($request->name);
    }

    public function index()
    {
        $recipes = new Recipes();
        return $recipes->all();
    }
}
