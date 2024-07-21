@extends('layout.master')

    @section('content')
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="">Create Category</h5>
                <a href="{{route('category')}}" class="btn btn-dark">back</a>
            </div>
            <div class="card-body">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                        <div class="form-text text-danger">@error('title') {{$message}}  @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>
    @endsection
