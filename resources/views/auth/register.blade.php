@extends('layout.master')

@section('content')
<div class="container-fluid">
	<a style="display: block;position: absolute;top: 25px;}" href="{!! url('/') !!}"><b>QUESTIONS</b></a>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open() !!}
						
					<!--username Form Input -->
						<div class="form-group">
							{!! Form::label('username','Username:') !!}
							{!! Form::text('username',null,['class'=>'form-control']) !!}
						</div>
							<!--email Form Input -->
						<div class="form-group">
							{!! Form::label('email','Email:') !!}
							{!! Form::text('email',null,['class'=>'form-control']) !!}
						</div>

						<!--password Form Input -->
						<div class="form-group">
						{!! Form::label('password','Password:') !!}
						{!! Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control' ) ) !!}
						</div>
                        <!--password_confirmation Form Input -->
                        <div class="form-group">
                        {!! Form::label('Confirm','Confirm:') !!}
                       {!! Form::password('password_confirmation', array('placeholder'=>'Password', 'class'=>'form-control' ) ) !!}
                        </div>
						<!--Register Form Input -->
						<div class="form-group">
						{!! Form::submit('JOIN',['class'=>'btn btn-success form-control']) !!}
						</div>
						
					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
