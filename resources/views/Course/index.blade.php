@extends('layouts.template')

@section('title', 'Courses')

@section('main')
    <h1 class="mt-3">Courses</h1>
    <form method="get" action="/courses" id="searchForm">
        <div class="row">
            <div class="col-sm-6 mb-2">
                <input type="text" class="form-control" name="name" id="name"
                       value="{{ request()->name }}" placeholder="Filter Course Name Or Description">
            </div>
            <div class="col-sm-4 mb-2">
                <select class="form-control" name="programme_id" id="programme_id">
                    <option value="%">All programmes</option>
                    @foreach($programmes as $programme)
                        <option
                            value="{{ $programme->id }}" {{ (request()->programme_id ==  $programme->id ? 'selected' : '') }}>{{ $programme->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2 mb-2">
                <button type="submit" class="btn btn-success btn-block">Search</button>
            </div>
        </div>
    </form>
    <hr>
    @if ($courses->count() == 0)
        <div class="alert alert-danger alert-dismissible fade show">
            Can't find any course/description with <b>'{{ request()->name }}'</b>
            @if(is_numeric(request()->programme_id))
                for the programme
                @foreach($programmes as $programme)
                    @if($programme->id == request()->programme_id)
                        <b>'{{$programme->name}}'</b>
                    @endif
                @endforeach
            @endif

            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        @foreach($courses as $course)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3 card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$course->name}}</h5>
                        <p class="card-text">{{$course->description}}</p>
                        <a href="#!" class="btn btn-link px-0 text-uppercase">{{$course->programme->name}}</a>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="/courses/{{ $course->id }}" class="btn btn-primary btn-block">Manage students</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section("script_after")
    <script>
        $(function () {
            $('#name').blur(function () {
                $('#searchForm').submit();
            });
            $('#programme_id').change(function () {
                $('#searchForm').submit();
            });
        })
    </script>
@endsection
