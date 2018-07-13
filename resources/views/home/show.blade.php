@extends('layout.master')
@section('content')
    <a style="display: block;position: absolute;top: 40px; left:18px;}" href="{!! url('/') !!}"><b>BACK QUESTIONS</b></a>
    <ul class="list-group">
        <li class="list-group-item"><h3 style="text-align: center"><b>{!! $question->title !!}</b></h3></li>
        <li class="list-group-item"><img src="http://www.gravatar.com/avatar/({!!md5($question->user->username) !!})?s=40" alt=""/>
            <p><b><span style="padding:1px 10px;" class="label label-success">{!! $question->user->username !!}</span></b></p>
            <span style="position: absolute;top:25px;left:75px">{!! $question->question !!}</span></li>
    </ul>



    <h3>Replies</h3>
    <hr/>

    @foreach($question->comments as $comments)


            <ul class="list-group">
                <li class="list-group-item"><img src="http://www.gravatar.com/avatar/md5({!! $comments->user->email !!})?s=40" alt="" />
                    <p><b><span style="padding:1px 10px; max-width:40px; text-align:center;" class="label label-success">{!! $comments->user->username !!}</span></b></p>
                    <p style="font-size:8px;">{!! $comments->created_at->diffForHumans() !!}</p>

                        <span style="position: absolute;top:25px;left:75px"><b>{!! $comments->comment !!}</b></span>


                </li>
            </ul>

    @endforeach


    <hr/>
    <div style="clear:both"></div>
    @include('errors.error')
    {!! Form::open(array('route'=>'comment.store')) !!}
    
    <!--comment Form Input -->
    <div class="form-group">
        {!! Form::label('comment','Comment:') !!}
        {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
        {!! Form::hidden('question_id',$question->id)  !!}
    </div>
    <!--Add Comment Form Input -->
    <div class="form-group">
    {!! Form::submit('Add Comment',['class'=>'btn btn-success form-control']) !!}
    </div>
     {!! Form::close() !!}

    <style>
 li{list-style: none; border:1px solid #ddd;}
textarea{height: 80px !important;}
    </style>


@stop
