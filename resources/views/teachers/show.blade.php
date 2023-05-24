@extends('welcome')

<body class="mt-5">

    {{-- <h1 class="container p-3 bg-dark text-white text-center "style="width: 700px;">Show teacher</h1> --}}
    <!-- <div class="pull-right"> -->
    <!-- <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="row"> -->
    <!-- <div class="col-xs-12 col-sm-12 col-md-12"> -->
    {{-- <form class="container form-control bg-secondary border-dark mx-auto p-5 "style="width: 700px; --bs-bg-opacity: .5;"> --}}

    <!-- </div> -->
    <div class="mb-3 col-10 fs-5">
        <div class="form-group">
            <strong>id:</strong>
            {{ $teacher->id }}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-group">
            <strong>name:</strong>
            {{ $teacher->name }}
        </div>
    </div>

    <div class="mb-3 col-10 fs-5">
        <div class="form-group">
            <strong>email:</strong>
            {{ $teacher->email }}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-group">
            <strong>contact_no:</strong>
            {{ $teacher->contact }}
        </div>
    </div>
    </div>
    <a class="btn btn-outline-dark" href="{{ route('teachers.index') }}">Back</a>
    </form>
</body>
{{-- @endsection --}}
