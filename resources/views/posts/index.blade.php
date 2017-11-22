@extends('layouts.template')


@section('adds')



    <body class="note_body">
    <div class="container">

      <a href="{{url('/')}}" class="btn btn-danger back_to_startpage_btn"> Go To Start Page</a>
    <div class="panel panel-success index_panel">
        <div class="panel-heading">
            Wish List
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="{{route('posts.create')}}" class="btn btn-default button_styling">Add New wish</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered table-stripped table_style">
                <tr>
                    <th width="50"></th>
                    <th width="200">Title</th>
                    <th width="300">Description</th>
                    <th width="210">Action</th>
                </tr>
                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                        <tr>

                            <td width="50"> <img src="{{ URL::asset('images/star_gold2.png')}}">  </td>
                            <td width="200">{{ $post->title }}</td>
                            <td width="300">{{ $post->content }}</td>
                            <td width="210" >
                                <!-- we use the route name in the route function -->
                                <a class="btn  btn-primary" href="{{route('posts.edit',['id' => $post->id])}}">Update</a>
                                <a class="btn btn-success" href="{{route('posts.show',$post->id) }}">Show</a>
                                <div class = "delete_form">
                                    <form  method="post" action="{{action('Posts_controller@destroy',$post->id)}}">

                                        {{csrf_field()}}

                                        <input  type="hidden" name = "_method" value="DELETE">
                                        <button class="btn  btn-danger" type="submit" name="DELETE" >DELETE</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No Wishes Yet!</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
    </div>
    </body>

@endsection