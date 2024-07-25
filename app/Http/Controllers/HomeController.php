<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index',[
            'todos'=> $todos
        ]);
    }
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('show',[
            'todo' => $todo
        ]);
    }
    public function create()
    {
        $categories = Category::all();

        return view('create',[
            'categories' => $categories]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:15',
            'category_id' => 'required',
            'image' => 'required|image'
        ],[
            'category_id.required'=>'the field category is required'
        ]);
        $category = Category::find($request->category_id);
        $imageName = $request->title.'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('images'.'/'.$category->title),$imageName);

    Todo::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $category->id,
            'image' => $imageName
        ]);
        return redirect('/');
    }
    public function edit($id)
    {
        $todo = Todo::find($id);
        $categories = Category::all();
        return view('edit',[
            'todo' => $todo,
            'categories' => $categories
        ]);
    }
    public function update(Request $request,Todo $todo)
    {

        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:15',
            'category_id' => 'required',
            'image' => 'image'
        ],[
            'category_id.required'=>'the field category is required'
        ]);
        if($request->hasFile('image')){
            Storage::delete('images/'.$todo->category->title.'/'.$todo->image);
            $imageName = $request->title.'.'.$request->file('image')->extension();
            $request->file('image')->move(public_path('images'.'/'.$todo->category->title),$imageName);
        }
        Todo::where('id',$todo->id)->update([
            'title'=>$request->title,
            'body'=> $request->body,
            'category_id'=>$request->category_id,
            'image' => $request->hasFile('image')? $imageName :$todo->image
        ]);
        return redirect('/');

    }
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');

    }
}


