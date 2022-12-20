@extends('layouts.app')
@section('title', "$post->title")
@section('content')
      @livewire('l-showpost',['id'=>$post->id])
@stop

