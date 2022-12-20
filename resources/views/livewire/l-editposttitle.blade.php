
<div>
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-2">
            @include('partials.sidebar')
        </div>
        <div class="col-sm-10 shadow" style="height: 100vh;">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h2>Edit Post</h2>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div>

                                @if (session()->has('msg'))
                        
                                    <div class="alert alert-success">
                        
                                        {{ session('msg') }}
                        
                                    </div>
                        
                                @endif
                        
                            </div>
                            <form wire:submit.prevent="updatePost">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input wire:model="title" type="text" id="title" class="form-control">
                                    @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
        
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <input wire:model="content" type="file" id="content" class="form-control">
                                    @error('content') <span class="text-danger small">{{ $message }}</span> @enderror
        
                                </div>
                                <div class="mb-3">
                                    <button type='submit' class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-sm-4">
                            @if($content)

                                    <img class="img-fluid" src="{{ $content->temporaryUrl() }}">

                            @endif
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</div>
