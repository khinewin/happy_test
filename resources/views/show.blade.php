
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url"                content="http://test.mmdata.cc/show/post/{{$post->id}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@if(Auth::user()){{Auth::user()->name}}@endif" />
    <meta property="og:image"              content= "https://test.mmdata.cc/items/{{$item->item_name}}" />
    
    <title>ပျော်ပါစေ </title>
    <link rel="stylesheet" href="{{URL::to('bst/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('fa/css/all.css')}}">
    @livewireStyles
</head>
<body>
    <div>
    @include('partials.navbar')
   
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
                    <a href="" class="btn btn-primary btn-lg mb-2" >Try Again</a>

                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ftest.mmdata.cc%2Fshow%2Fpost%2F{{$post->id}}&layout=button&size=large&width=77&height=28&appId" width="200" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    
                        <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{URL::to('bst/js/popper.js')}}"></script>
<script src="{{URL::to('bst/js/bootstrap.js')}}"></script>
@livewireScripts


</body>
</html>

