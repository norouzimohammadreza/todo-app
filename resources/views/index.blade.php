@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Todos</h5>
            <a href="{{route('create')}}" class="btn btn-dark">create</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                <tr>
                    <td><img width="90" class="rounded" src="{{asset('/images/'.$todo->category->title.'/'.$todo->image)}}" alt=""></td>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->category->title}}</td>
                    <td>
                        <a href="{{route('show',['id'=>$todo->id])}}" class="btn btn-sm btn-secondary">Show</a>
                        <button disabled class="btn btn-sm btn-outline-danger">Completed</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
