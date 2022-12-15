
<div>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        @if($item_count >=1)
                        <img src="{{URL::to('items/'.$item->item_name)}}" class="img-fluid" alt="{{$item->item_name}}">
                        @endif
                    </div>
                    <div class="card-footer ">
                        <div class="d-grid gap-2 col-12">
                        <a href="#!" wire:model="doRetry" class="btn btn-primary btn-lg mb-2" >Try Again</a>

                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ftest.mmdata.cc%2Fshow%2Fpost%2F{{$post_id}}&layout=button&size=large&width=77&height=28&appId" width="200" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        
                            <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}">Home</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--
            <div class="col-sm-6 mt-3">
                <h5>Posts you may also like</h5>
                <div class="row">
                    @foreach($posts as $p)
                        <div class="col-sm-6">
                            <div class="card shadow">
                                <div class="card-body">
                                    <a href="{{route('post.show', ['id'=>$p->id])}}">
                                        <div class="card-body">
                                            <img src="{{URL::to('contents/'.$p->content)}}" class="img-fluid" alt="{{$p->title}}">
                                            <p class="mt-2">{{$p->title}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex mt-3">
                        {{$posts->links()}}
                    </div>
                </div>
--}}
            </div>
        </div>
    </div>
</div>