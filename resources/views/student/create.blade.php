@extends('layout.app')

@section('content')
    <h1 class="text-center my-3  text-info">Add New Student</h1>
    <div class="container col-md-6">
        @if(Session::has('done'))
            <div class="alert alert-success" style="display: flex ;justify-content: space-between;">
                {{Session::get("done")}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card p-4">
            <div class="card-body">
                <form method="POST" action="{{route('student.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="mt-1">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control m-3">

                        <label for="level" class="mt-1">Level</label>
                        <input type="number" name="level" id="level" class="form-control m-3">

                        <label for="grade" class="mt-1">Grade</label>
                        <select id="grade" class="form-control m-3" name="grade">
                            <option value="Grade A">Grade A</option>
                            <option value="Grade B">Grade B</option>
                            <option value="Grade C">Grade C</option>
                            <option value="Grade D">Grade D</option>
                            <option value="Grade F">Grade F</option>
                        </select>
                        <label for="gpa" class="mt-1">GPA</label>
                        <input type="text" name="gpa" id="gpa" class="form-control m-3">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add" class="form-control btn btn-info m-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
