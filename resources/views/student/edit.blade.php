@extends('layout.app')

@section('content')
    <h1 class="text-center my-3  text-info">Edit Student : {{$student->id}}</h1>
    <div class="container col-md-6">
        @if(Session::has('done'))
            <div class="alert alert-success" style="display: flex ;justify-content: space-between;">
                {{Session::get("done")}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card p-4">
            <div class="card-body">
                <form method="POST" action="{{route('student.update',$student->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="mt-1">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control m-3" value="{{$student->name}}">

                        <label for="level" class="mt-1">Level</label>
                        <input type="number" name="level" id="level" class="form-control m-3" value="{{$student->level}}">

                        <label for="grade" class="mt-1">Grade</label>
                        <select id="grade" class="form-control m-3" name="grade" selected="{{$student->grade}}">
                            <option selected @readonly(true) value="{{$student->grade}}">{{$student->grade}}</option>
                            <option value="a">Grade A</option>
                            <option value="b">Grade B</option>
                            <option value="c">Grade C</option>
                            <option value="d">Grade D</option>
                            <option value="f">Grade F</option>
                        </select>
                        <label for="gpa" class="mt-1">GPA</label>
                        <input type="text" name="gpa" id="gpa" class="form-control m-3" value="{{$student->GPA}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="form-control btn btn-warning m-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
