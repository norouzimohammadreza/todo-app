@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Todos</h5>
            <a href="#" class="btn btn-dark">create</a>
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
                <tr>
                    <td>Image</td>
                    <td>Lorem, ipsum dolor</td>
                    <td>Category One</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-secondary">Show</a>
                        <button disabled class="btn btn-sm btn-outline-danger">Completed</button>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>Lorem, ipsum dolor</td>
                    <td>Category Tow</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-secondary">Show</a>
                        <a href="#" class="btn btn-sm btn-info">Done?</a>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>Lorem, ipsum dolor</td>
                    <td>Category Three</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-secondary">Show</a>
                        <button disabled class="btn btn-sm btn-outline-danger">Completed</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
