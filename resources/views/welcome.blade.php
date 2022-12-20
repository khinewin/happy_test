@extends('layouts.app')

@section('title')
     Welcome
@endsection

@section('content')

    <div class="container mt-2">
        <div class="row">
           @foreach($posts as $p)
            <div class="col-sm-3 mt-2">
                <div class="card shadow">
                    <a href="{{URL::to("/show/post/$p->id")}}" style="text-decoration:none">
                        <div class="card-body">
                            <img src="{{URL::to('contents/'.$p->content)}}" class="img-fluid" alt="{{$p->title}}">
                            <p class="mt-2">{{$p->title}}</p>
                        </div>
                    </a>
                </div>
            </div>
           @endforeach
        </div>
        <div class="d-flex mt-3">
            {!! $posts->links() !!}
        </div>
    </div>

@stop