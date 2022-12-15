<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="{{URL::to('https://byawparsayme.me/imgs/file.jpeg')}}" />

<title>ပျော်ပါစေ | Dashboard</title>
<link rel="stylesheet" href="{{URL::to('bst/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::to('fa/css/all.css')}}">
</head>
<body>
    
    @include('partials.navbar')

    @livewire('l-dashboard')
    

    <script src="{{URL::to('bst/js/popper.js')}}"></script>
    <script src="{{URL::to('bst/js/bootstrap.js')}}"></script>
    
</body>
</html>