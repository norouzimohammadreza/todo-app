@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Edit Category</h5>
            <a href="{{route('category')}}" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="{{url('/category/update/'.$category->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="{{$category->title}}" class="form-control">
                    <div class="form-text text-danger">@error('title') {{$message}}@enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
