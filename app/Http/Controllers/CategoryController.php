<?php

namespace App\Http\Controllers;

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
         'title' => 'required'
     ]);
    }
}
