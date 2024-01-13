@extends('layout.master')
@push('head')
    <title>Todo List App</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-itmes-center my-5">
            <h2>Create/Add Todo</h2>
            <a href="{{ route('welcome.todo') }}" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('store.todo') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label mt-2">Name</label>
                      <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="name">
                      <div class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label mt-2">Work</label>
                      <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="work">
                      <div class="text-danger">
                        @error('work')
                            {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label mt-2">Due Date</label>
                      <input type="date" class="form-control" id="" aria-describedby="emailHelp" name="due_date">
                      <div class="text-danger">
                        @error('due_date')
                            {{ $message }}
                        @enderror
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Add Todo</button>
                  </form>
            </div>
        </div>
    </div>

@endsection
