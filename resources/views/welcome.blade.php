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
            @foreach ($todo as $data)
            <tbody>
                <tr valign="middle">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->work }}</td>
                    <td>{{ $data->due_date }}</td>
                    <td>
                        <a href="{{ route('edit.todo') }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('destroy.todo', $data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>

            @endforeach
          </table>
    </div>

@endsection
