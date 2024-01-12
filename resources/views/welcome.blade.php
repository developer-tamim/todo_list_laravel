@extends('layout.master')
@push('head')
    <title>Todo List App</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-itmes-center my-5">
            <h2>All Todo list</h2>
            <a href="{{ route('create.todo') }}" class="btn btn-primary btn-lg">Add Todo</a>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Work</th>
                <th scope="col">Due Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr valign="middle">
                <td>Name</td>
                <td>Word</td>
                <td>Due Date</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>

@endsection
