@extends('layouts.app')

@section('title')
     Welcome
@endsection

@section('content')

    <div class="container mt-2">
        <div class="row">
           @foreach($posts as $p)
            <div class="col-sm-4 mt-2">
                <div class="card shadow">
                    <a href="{{route('post.show', ['id'=>$p->id])}}">
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