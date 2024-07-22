@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Create Todo</h5>
            <a href="#" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    <div class="form-text text-danger">@error('image') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                    <div class="form-text text-danger">@error('title') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                    @foreach($categories->all() as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                    </select>
                    <div class="form-text text-danger">@error('category_id') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="body" rows="3"></textarea>
                    <div class="form-text text-danger">@error('body') {{$message}} @enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
