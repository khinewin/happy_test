<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4 mt-5">
                <h2 class="mb-2 text-center">Registration</h2>
                <div class="card shadow mb-1">
                    <div class="card-body">
                        <div>

                            @if (session()->has('msg'))
                    
                                <div class="alert alert-success">
                    
                                    {{ session('msg') }}
                    
                                </div>
                    
                            @endif
                    
                        </div>
                        <form class="mt-5" wire:submit.prevent="postRegister">
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Name</label>
                                <input type="text" wire:model="name" id="user_name" class="form-control">
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
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
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" wire:model="confirm_password" id="confirm_password" class="form-control">
                                @error('confirm_password') <span class="text-danger small">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Signup</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                Already have an account ? <a href="{{route('login')}}">Login</a>
            </div>
        </div>
    </div>
</div>
