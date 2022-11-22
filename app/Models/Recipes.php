<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;
    protected $table = 'recipes';

    function deleteById($id)
    {
        return Recipes::destroy($id);
    }

    function getById($id)
    {
        return Recipes::where('id', $id)->get();
    }

    function getByName($name)
    {
        return Recipes::where('name', $name)->get();
    }

    function getAll() 
    {
        return Recipes::all();
    }
}
