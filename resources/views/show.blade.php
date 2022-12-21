@extends('layouts.app')
@section('title', "$post->title")
@section('content')
      @livewire('l-showpost',['id'=>$post->id])
@stop

{{--
    <script>(function(d,z,s){s.src='https://'+d+'/401/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('gloaphoo.net',5596069,document.createElement('script'))</script>
--}}