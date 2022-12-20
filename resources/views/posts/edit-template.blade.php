@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')

@livewire('l-editpost', ['post'=>$post])

@stop