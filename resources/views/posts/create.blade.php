@extends('layouts.template')

@section('adds')
    <body class="note_body">
    <div class="container">
        <div class="panel panel-success index_panel">
            <div class="panel-heading">Add New Wish </div>
            <div class="panel-body">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <strong>Errors:</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ action('Posts_controller@store')}}">

                    <input  name="_token" type="hidden"  value="{{ csrf_token() }}">
                    <input type="text" name = "title" class="form-control" placeholder="Title">
                    <input type="text" name="content" class="form-control" placeholder="Write description">

                    <input class="btn btn-default button_styling" type='submit' value="Create">
                    <a href="{{route('posts.index')}}" class="btn btn-default button_styling">Cancel</a>
                </form>


            </div>

        </div>
    </div>
    </body>

@endsection