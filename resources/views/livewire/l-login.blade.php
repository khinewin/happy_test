<div>
   
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 mt-5">
            <h2 class="mb-2 text-center">Login</h2>
            <div class="card shadow mb-1">
                <div class="card-body">
                    <div>

                        @if (session()->has('msg'))
                
                            <div class="alert alert-danger">
                
                                {{ session('msg') }}
                
                            </div>
                
                        @endif
                
                    </div>
                    <form class="mt-5" wire:submit.prevent="postLogin">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" wire:model="email" id="email" class="form-control">
                            @error('email') <span class="text-danger small">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" wire:model="password" id="password" class="form-control">
                            @error('password') <span class="text-danger small">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Signin</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
