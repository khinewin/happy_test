<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ပျော်ပါစေ | @yield('title')</title>

    <link rel="shortcut icon" href="{{URL::to('imgs/Happy.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{URL::to('bst/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('fa/css/all.css')}}">
    @livewireStyles
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
    
    @include('partials.navbar')

    @yield('content')
    
    @include('partials.footer')
    <script src="{{URL::to('bst/js/popper.js')}}"></script>
    <script src="{{URL::to('bst/js/bootstrap.js')}}"></script>
    @livewireScripts
   
</body>
</html>