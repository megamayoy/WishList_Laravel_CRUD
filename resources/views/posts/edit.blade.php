@extends('layouts.template')

@section('adds')
    <body class="note_body">
    <div class="container">
        <div class="panel panel-primary index_panel">
            <div class="panel-heading">Edit Wish </div>
            <div class="panel-body">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <strong>Errors:</strong>
                        <ul>1
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="POST" action="{{action('Posts_controller@update',$post->id)}}">

                        <input  type="hidden" name="_method" value="PUT">
                    <!--{{csrf_field()}} -->
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <input type="text" name = "title" class="form-control" value="{{$post->title}}">
                        <input type="text" name="content" class="form-control" value="{{$post->content}}">

                        <input class="btn btn-default button_styling" type='submit' value="Update">
                        <a href="{{route('posts.index')}}" class="btn btn-default button_styling">Cancel</a>

                    </form>



            </div>

        </div>
    </div>
    </body>

@endsection