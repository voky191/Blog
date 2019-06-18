@extends('layout')

@section('content')
<div class="content">
    <div class="title m-b-md">
        <a>{{$page->id}}</a>
        <a>{{$page->title}}</a>
        <a>{{$page->body}}</a>
        <a>{{$page->updated_at}}</a><br>
        <a href="/">Return</a>
    </div>
</div>
@endsection