@extends('layouts.app')
@section('title', "$post->title")
@section('content')
   <div>
      @livewire('l-showpost',['id'=>$post->id])
   </div>
@stop

