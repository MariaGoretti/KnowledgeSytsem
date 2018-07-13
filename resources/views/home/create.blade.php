@extends('layout.master')
@section('content')

    <h3>ADD QUESTION</h3>

    {!! Form::open(array('route'=>'question.store','method'=>'POST')) !!}
        <!--title Form Input -->
            <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
              <!--question Form Input -->
              <div class="form-group">
              {!! Form::label('question','Question:') !!}
              {!! Form::textarea('question',null,['class'=>'form-control']) !!}
              </div>
            <!--Add Question Form Input -->
            <div class="form-group">
            {!! Form::submit('Add Question',['class'=>'btn btn-success form-control']) !!}
            </div>
    


    {!! Form::close() !!}


    @include('errors.error')


@stop