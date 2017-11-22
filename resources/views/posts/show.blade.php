@extends('layouts.template')

@section('adds')
    <body class="note_body">
    <div class="container">
        <div class="panel panel-success index_panel">
            <div class="panel-heading">Show Wish </div>
            <div class="panel-body">


                <div class="form-group">
                    <p>Name:  {{ $post->title  }} </p>
                </div>

                <div class="form-group">
                    <p>Description:  {{$post->content}} </p>
                </div>
                <a href="{{route('posts.index')}}"  class="btn btn-default button_styling" >Show All Wishes</a>

            </div>
        </div>

    </div>
    </div>
    </body>

@endsection