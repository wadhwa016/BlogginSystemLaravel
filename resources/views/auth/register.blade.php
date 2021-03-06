@extends('main')

@section('title', 'Register')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			

			 @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif

			{{ Form::open() }}

				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class'=>'form-control']) }}

				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class'=>'form-control']) }}

				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class'=>'form-control']) }}

				{{ Form::label('password_confirmation', 'Confirm Password:') }}
				{{ Form::password('password_confirmation', ['class'=>'form-control']) }}
				<br>
				{{ Form::submit('Register', ['class'=>'btn btn-primary btn-block']) }}


			{{ Form::close() }}

		</div>
	</div>

@stop