@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')

@livewire('l-editposttitle', ['post'=>$post])

@stop