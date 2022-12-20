
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        @if($item_count >=1)
                        <img src="{{URL::to('items/'.$item->item_name)}}" class="img-fluid" alt="{{$item->item_name}}">
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                                <a href="#!" wire:model="doRetry" class="btn btn-primary btn-lg mb-2" >Try Again</a>
                                <a href="{{URL::to("save/for/share/$post_id/$hash_id/$item->item_name")}}"   class="btn btn-primary btn-lg mb-2" >Save For Share</a>

                                <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}">Home</a>

                           
                            </div>
                    </div>
                </div>
            </div>

        </div>
</div>