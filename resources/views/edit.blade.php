@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Edit Todo</h5>
            <a href="{{url('/')}}" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="{{route('update',[$todo])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    <div class="form-text text-danger">@error('image') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="{{$todo->title}}" class="form-control">
                    <div class="form-text text-danger">@error('title') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                    @foreach($categories->all() as $category)
                        <option {{ $todo->category_id == $category->id ? 'selected' : '' }}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                    </select>
                    <div class="form-text text-danger">@error('category_id') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">body</label>
                    <textarea class="form-control" name="body" rows="3">{{$todo->body}}</textarea>
                    <div class="form-text text-danger">@error('body') {{$message}} @enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
