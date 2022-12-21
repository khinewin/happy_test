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
                            <span  style="position: absolute; bottom: 10px; left: 5px; right: 5px;">{{{ $p->title }}}</span>
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
{{--
<script async="async" data-cfasync="false" src="//arsnivyr.com/1?z=5609891"></script>
--}}