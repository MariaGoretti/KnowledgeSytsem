@extends('layout.master')
@section('content')


<div class="col-offset-6 centered">
                @foreach($question as $questions)
                    <ul class="list-group">

                        <li class="list-group-item">&nbsp;<img src="http://www.gravatar.com/avatar/md5({!!$questions->user->username !!})?s=40" alt="" /><span class="badge">{!! $questions->user->username !!}</span><span class="badge">{!!$questions->comments->count()  !!} Comments</span><span class="badge">{!! $questions->created_at->diffForHumans() !!}</span><a style="margin-left:10px;"
                                    href="{!! route('question.show',$questions->id) !!}"><b>{!! $questions->title !!}</b></a></li>
                    </ul>

                @endforeach


</div>


<style>

</style>

@stop