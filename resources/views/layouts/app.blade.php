<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ပျော်ပါစေ | @yield('title')</title>

    <link rel="shortcut icon" href="{{URL::to('imgs/happy.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{URL::to('bst/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('fa/css/all.css')}}">
    @livewireStyles
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