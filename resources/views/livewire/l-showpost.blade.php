
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-sm-6">

                <div class="card shadow">
                    <span style="position: absolute; top: 2px; left: 5px;" wire:loading>Loading...</span>
 
                    <div class="card-body">
                        @if($item_count >=1)
                        <img src="{{URL::to('items/'.$item->item_name)}}" class="img-fluid" alt="{{$item->item_name}}">
                        @endif

                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                                <a href="#!" wire:click="doRetry" class="btn btn-primary btn-lg mb-2" ><i class="fa-solid fa-repeat"></i> Retry</a>
                                <a href="{{URL::to("share/$post_id/$hash_id/$item->id")}}"   class="btn btn-primary btn-lg mb-2" ><i class="fa-brands fa-facebook"></i> Save For Share</a>

                                <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}"><i class="fa-solid fa-house"></i> Home</a>

                           
                            </div>
                    </div>
                </div>
            </div>

        </div>
</div>