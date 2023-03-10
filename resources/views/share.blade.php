<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta property="og:type"               content="profile" />
    <meta property="profile:username" content="{{$share_name}} {{$share->post_ans}}"/>
    <meta property="og:url"                content="{{url()->current()}}?share_name={{$share_name}}" />
    <meta property="og:title"              content="@if($share_name){{$share_name}} {{$share->post_ans}}@else{{$share->post_content}}@endif" />
    <meta property="og:description"        content="{{$share->post_content}}" />
    <meta property="og:image"              content= "https://happy.mmdata.cc/items/{{$share->post_img}}" />
    <meta property="fb:app_id" content="671829351269589"/>
    <link rel="canonical" href="{{url()->current()}}?share_name={{$share_name}}"/>
    <link rel="shortcut icon" href="{{URL::to('imgs/Happy.png')}}" type="image/x-icon">

    <title>@if($share_name){{$share_name}} {{$share->post_ans}}@else {{$share->post_content}} @endif</title>
    <link rel="stylesheet" href="{{URL::to('bst/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('fa/css/all.css')}}">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EGRZ5FYWB3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EGRZ5FYWB3');
</script>
    
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=671829351269589&autoLogAppEvents=1" nonce="ADpohHBV"></script>

    @include('partials.navbar')
 
    <div class="container mt-2">
        <div class="row justify-content-center">
           
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text text-center">
                            <span class="text-danger">?????????????????????????????????????????????????????????????????????????????????????????? Retry ???????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????</span>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-text text-center">
                            <span class="text-black">@if($share_name)<b>"{{$share_name}}"</b> {{$share->post_ans}}@else{{$share->post->title}}@endif</span>
                    </div>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <img src="{{URL::to('items/'.$share->post_img)}}" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">


                               <a href="{{route('post.show',['id'=>$share->post_id])}}"  wire:model="doRetry" class="btn btn-primary btn-lg mb-2" ><i class="fa-solid fa-repeat"></i> Retry</a>
                              {{--<a target="_blank" class="btn btn-primary mb-2 btn-lg" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fhappy.mmdata.cc%2Fshare%2F{{$share->post_id}}%2F{{$share->share_id}}%2F{{$share->img_id}}&amp;src=sdkpreparse"><i class="fa-brands fa-facebook"></i> Share On Facebook</a> --}}

                              
                            <div class="fb-share-button btn btn-lg mb-2" data-href="https://happy.mmdata.cc/share/{{$share->post_id}}/{{$share->share_id}}/{{$share->img_id}}?share_name={{$share_name}}" data-layout="button" data-size="large">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fhappy.mmdata.cc%2Fshare%2F{{$share->post_id}}%2F{{$share->share_id}}%2F88%3Fshare_name%3D{{$share_name}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
                            </div>
                               <a class="btn btn-primary mb-2 btn-lg" href="{{route('/')}}"><i class="fa-solid fa-house"></i> Home</a>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
   
    <script src="{{URL::to('bst/js/popper.js')}}"></script>
    <script src="{{URL::to('bst/js/bootstrap.js')}}"></script>
   
    <script>(function(d,z,s){s.src='https://'+d+'/401/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('gloaphoo.net',5596069,document.createElement('script'))</script>

    @livewireScripts
   
</body>
</html>