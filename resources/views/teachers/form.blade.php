
<body class="mt-4" style="background-color:aliceblue";>
    @if (isset($teacher))
        {!! Form::model($teacher, ['route' => ['teachers.update', $teacher->id], 'method' => 'PUT']) !!}
    @else
        {!! Form::model(null, ['route' => ['teachers.store'], 'method' => 'POST']) !!}
    @endif

    @csrf
    <div class="mb-3 col-10 fs-5">
        {!! Form::label('name', 'Name : ') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter Name']) !!}
    </div>

    <div class="mb-3 col-10 fs-5">
        {!! Form::label('email', 'Email : ') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email']) !!}
    </div>

    <div class="mb-3 col-10 fs-5">
        {!! Form::label('contact', 'Contact :') !!}
        {!! Form::text('contact', null, [
            'class' => 'form-control',
            'id' => 'contact',
            'placeholder' => 'Enter Contact No',
        ]) !!}
    </div>

    <div class="mb-3 col-10 fs-5">
        {!! Form::label('city', 'City : ') !!}
        {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'Enter City']) !!}
    </div>

    <br>
    <div class="d-flex" style="justify-content:space-between">
        {!! Form::submit(isset($teacher) ? 'Update' : 'Create', ['class' => 'btn btn-outline-primary']) !!}
        <a class="btn btn-outline-dark float-end" href="{{ route('teachers.index') }}"> Back</a>
    </div>

    {!! Form::close() !!}
</body>
