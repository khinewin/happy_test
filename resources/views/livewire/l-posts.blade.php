
<div>
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-2">
            @include('partials.sidebar')
        </div>
        <div class="col-sm-10 shadow" style="height: 100vh">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Posts</h2>
                    <div>

                        @if (session()->has('msg'))
                
                            <div class="alert alert-success">
                
                                {{ session('msg') }}
                
                            </div>
                
                        @endif
                
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>

                            <th>Content</th>
                            <th>Status</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($posts as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->title}}</td>
                                <td><img style="width: 100px;" src="{{URL::to('contents/'.$p->content)}}" alt="{{$p->title}}"></td>
                                <td>
                                    @if($p->ready) <span class="text-success"><i class="fa-solid fa-eye"></i></span> @else <span class="text-danger"><i class="fa-sharp fa-solid fa-eye-slash"></i></span> @endif
                                </td>
                                <td>{{$p->user->name}}</td>
                                <td>{{date('d-m-Y h:i A', strtotime($p->created_at))}}</td>
                                <td>
                                    <a href="{{route('posts.edit', ['id'=>$p->id])}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('posts.template.edit', ['id'=>$p->id])}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-gears"></i></a>
                                    <a href="#!" class="btn btn-sm btn-primary" wire:click="changeReady({{$p->id}})"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#!" class="btn btn-sm btn-danger" wire:click="deletePost({{$p->id}})"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
       </div>
    </div>
</div>
