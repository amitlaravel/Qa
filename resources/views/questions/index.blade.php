@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($questions as $question)
                    <div class="media">
                        <div class="media-body">
                         <h3 class="mt-0"><a href="{{$question->url}}">{{ $question->title }}</a></h3>
                         {{ str_limit($question->body, 250) }}
                        </div>
                        <div class="lead">
                            Asked By 
                            <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                            <small class="text-muted">{{ $question->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    @endforeach
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
