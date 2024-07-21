<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
     $request->validate([
         'title' => 'required|min:5'
     ]);
     Category::create([
         'title' => $request->title
     ]);
     return redirect('/');
    }
    public function index()
    {
        $categories = Category::all();
        return view('category.index',[
            'categories' => $categories
        ]);
    }
    public function edit($id)
    {
        dd($id);
    }
}
