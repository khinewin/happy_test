@extends('layouts.app')
@section('content')
      @livewire('l-showpost',['id'=>$post->id])
@stop

