@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Edit Category</h5>
            <a href="" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="" method="POST">

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="sfsafas" class="form-control">
                    <div class="form-text text-danger">safafasfas</div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
