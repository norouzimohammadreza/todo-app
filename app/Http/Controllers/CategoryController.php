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
     return redirect('/category');
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
        $category = Category::where('id',$id)->first();
        return view('category.edit',[
            'category' => $category
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5'
        ]);
       Category::where('id',$id)->update([
           'title' => $request->title
       ]);
       return redirect('/category');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
       return redirect('category/');
    }
}
