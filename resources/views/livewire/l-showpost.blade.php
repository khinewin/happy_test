
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text text-center">
                            <span>{{$item->post->title}}</span>
                    </div>
                    </div>
                </div>
                <div class="card shadow">
                    
                    <div class="card-body">
                        
                        @if($item_count >=1)
                        <img src="{{URL::to('items/'.$item->item_name)}}" class="img-fluid" alt="{{$item->item_name}}">
                        @endif

                    </div>
                  {{-- <form action="{{URL::to("share/$post_id/$hash_id/$item->id")}}" method="get">
                    <div class="card-footer">
                        <div>
                            <input type="text" placeholder="Enter your name"  name="share_name" class="form-control">
                        </div>
                    </div>
                     </form>
                     --}} 
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                              <a href="{{URL::to("share/$post_id/$hash_id/$item->id?share_name=$share_name")}}"   class="btn btn-primary btn-lg mb-2" ><i class="fa-brands fa-facebook"></i> Save For Share</a> 
                           {{--    <button type="submit"  class="btn btn-primary btn-lg mb-2"><i class="fa-brands fa-facebook"></i> Save For Share</button> --}}
                             <a href="#!" wire:click="doRetry" class="btn btn-primary btn-lg mb-2" ><i class="fa-solid fa-repeat"></i> Retry</a>

                                <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}"><i class="fa-solid fa-house"></i> Home</a>

                           
                            </div>
                    </div>
               
                </div>
            </div>
            <div class="col-sm-12 mt-2">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">Posts you may like</div>
                        <div class="row">
                            @foreach($posts as $p)
                             <div class="col-sm-3 mt-2">
                                 <div class="card shadow">
                                     <a href="{{URL::to("/show/post/$p->id")}}" style="text-decoration:none">
                                         <div class="card-body">
                                             <img src="{{URL::to('contents/'.$p->content)}}" class="img-fluid" alt="{{$p->title}}">
                                             <span >{{{ $p->title }}}</span>
                                         </div>
                                         
                                     </a>
                                 </div>
                             </div>
                            @endforeach
                         </div>
                         
                    </div>
                </div>
                 
            </div>

        </div>
</div>