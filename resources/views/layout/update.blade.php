@extends('layout.master')
@push('head')
    <title>Todo List App</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-itmes-center my-5">
            <h2>Update Todo</h2>
            <a href="{{ route('welcome.todo') }}" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                      <label for="" class="form-label mt-2" name="name">Name</label>
                      <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label mt-2" name="name">Work</label>
                      <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label mt-2" name="name">Due Date</label>
                      <input type="date" class="form-control" id="" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                  </form>
            </div>
        </div>
    </div>

@endsection
