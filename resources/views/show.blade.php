@extends('layout')

@section('content')
<br>
<div class="content">
    <div><a>
            <h1>{{$page->title}}</h1>
        </a>
        <div>
            <div>{{$page->updated_at}}</div>
            <a>Tags: </a>
            <a href="/categories/music">Music</a>
            <div class="content">
            </div>
            <p>{{$page->fulltext}}</p>
            <a href="/">Return</a>
    </div>
</div>
</div>
@endsection