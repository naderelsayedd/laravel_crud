@extends('layout.app')

@section('content')
    <h1 class="text-center my-3  text-info">List Students</h1>
    <div class="container col-md-6">
        @if(Session::has('done'))
            <div class="alert alert-success" style="display: flex ;justify-content: space-between;">
                {{Session::get("done")}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card p-4">
            <div class="card-body">
                <table class="table border rounded">
                    <tr>
                        <th>Num</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Grade</th>
                        <th>GPA</th>
                        <th>Action</th>
                    </tr>

                    @forelse ($Students as $item)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$item->id}}</th>
                            <th>{{$item->name}}</th>
                            <th>{{$item->level}}</th>
                            <th>{{$item->grade}}</th>
                            <th>{{$item->GPA}}</th>
                            <th>
                                <a class="text-success m-1" href="{{route('student.edit' ,$item->id)}}">Edit</a>
                                <a class="text-danger m-1" href="{{route('student.destroy' ,$item->id)}}">Delete</a>
                            </th>
                        </tr>
                    @empty
                        <h6 class="alert alert-danger mt-2 mb-2 text-center">No Data Here</h6>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
