<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoryproduct;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category()
    {   

        $category = categoryproduct::all();
        return view('home',compact("category"));
    }
    public function  dropdow()
    {
        $dropdow    =   categoryproduct::all();
        return view('addProduct',compact("dropdow"));
    }
}
