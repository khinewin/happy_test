
<div>
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-2">
            @include('partials.sidebar')
        </div>
        <div class="col-sm-10 shadow" style="height: 100vh">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Edit Post</h2>
                    <hr>
                    <h6>{{$post->title}}</h6>
                    <div class="row" style="height: 200px;">
                        <div class="col-sm-4">
                            <form wire:submit.prevent="create">
                                <div class="mb-3">
                                    <input wire:model="item_name" type="file" id="item_name" class="form-control">
                                    @error('item_name') <span class="text-danger small">{{ $message }}</span> @enderror
        
                                </div>
                                <div class="mb-3">
                                    <button type='submit' class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2">
                            @if($item_name)

                                   <div class="card shadow">
                                        <div class="card-body">
                                            <img class="img-fluid" src="{{ $item_name->temporaryUrl() }}">

                                        </div>
                                        
                                   </div>

                            @endif
                        </div>
                    </div>

                    <div>
                        <div class="card shadow">
                            <div class="card-body row">
                                @foreach ($items as $i)
                                    <div class="col-sm-3">
                                        <img class="img-fluid" src="{{URL::to('items/'.$i->item_name)}}" alt="">
                                        <div class="card-footer">
                                            <a href="#!" wire:click="deleteItem({{$i->id}})" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       </div>
    </div>
</div>
