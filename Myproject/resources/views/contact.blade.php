@extends('layout.app')

@section('content')
    <h1>Contact</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
    <?php echo Form::token(); ?>
        <div class="form_group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter Name']) }}
        </div>
        <div class="form_group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::text('email', '',['class'=>'form-control', 'placeholder'=>'Enter Email']) }}
        </div>
        <div class="form_group">
            {{ Form::label('message', 'Message') }}
            {{ Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter Message']) }}
        </div>
    <br>
        <div>
            {{ Form::submit('Submit', ['class'=>'btn btn-primary'])  }}
        </div>

    {!! Form::close() !!}


@endsection