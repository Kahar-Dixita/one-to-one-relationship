
<body class="mt-4" style="background-color:aliceblue";>
    @if (isset($student))
        {!! Form::model( $student, ['route' => ['students.update', $student->id], 'method' => 'PUT']) !!}
    @else
        {!! Form::model(null, ['route' => ['students.store'], 'method' => 'POST']) !!}
    @endif

    @csrf
    <div class="mb-3 col-10 fs-5">
        {!! Form::label('name', 'Name : ') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter Name']) !!}
    </div>

    <div class="mb-3 col-10 fs-5">
        {!! Form::label('address', 'Address :') !!}
        {!! Form::text('address', null, [
            'class' => 'form-control',
            'id' => 'address',
            'placeholder' => 'Enter Address',
        ]) !!}
    </div>

    <div class="mb-3 col-10 fs-5">
        {!! Form::label('email', 'Email : ') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email']) !!}
    </div>
    <div class="fs-5 mb-1">
        {!! Form::label('gender', 'Gender :') !!}
    </div>
    <div class="form-check mb-3">
        {!! Form::radio('gender', 'Male', null, ['id' => 'radio1', 'class' => 'form-check-input']) !!}
        {!! Form::label('radio1', 'Male', ['class' => 'form-check-label']) !!}
    </div>

    <div class="form-check mb-3">
        {!! Form::radio('gender', 'Female', null, ['id' => 'radio2', 'class' => 'form-check-input']) !!}
        {!! Form::label('radio2', 'Female', ['class' => 'form-check-label']) !!}
    </div>

    <br>
    <div class="d-flex" style="justify-content:space-between">
        {!! Form::submit(isset($student) ? 'Update' : 'Create', ['class' => 'btn btn-outline-primary']) !!}
        <a class="btn btn-outline-dark float-end" href="{{ route('students.index') }}"> Back</a>
    </div>

    {!! Form::close() !!}
</body>
