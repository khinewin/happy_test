
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url"                content="http://test.mmdata.cc/show/post/{{$share->post_id}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{$share->share_name}}" />
    <meta property="og:description"        content="{{$share->share_name}}" />
    <meta property="og:image"              content= "https://test.mmdata.cc/items/{{$share->post_img}}" />
    
    <title>@if($share->share_name){{$share->share_name}} @else {{$share->post_content}} @endif</title>
    <link rel="stylesheet" href="{{URL::to('bst/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('fa/css/all.css')}}">
</head>
<body>
    @include('partials.navbar')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="{{URL::to('items/'.$share->post_img)}}" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">


                               <a href="{{route('post.show',['id'=>$share->post_id])}}"  wire:model="doRetry" class="btn btn-primary btn-lg mb-2" ><i class="fa-solid fa-repeat"></i> Retry</a>
                               <a target="_blank" class="btn btn-primary mb-2 btn-lg" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fhappy.mmdata.cc%2Fshare%2F{{$share->post_id}}%2F{{$share->share_id}}%2F{{$share->post_img}}&amp;src=sdkpreparse"><i class="fa-brands fa-facebook"></i> Share On Facebook</a>
                               <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}"><i class="fa-solid fa-house"></i> Home</a>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{URL::to('bst/js/popper.js')}}"></script>
<script src="{{URL::to('bst/js/bootstrap.js')}}"></script>


</body>
</html>

