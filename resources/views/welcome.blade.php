@extends('layout')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    @foreach ($pages as $page)
                        <a href="/{{$page->id}}">{{$page->id}}</a>
                        <a>{{$page->title}}</a>
                    <a>{{$page->body}}</a>
                        <a>{{$page->updated_at}}</a>
                        <br>
                    @endforeach
                </div>
            </div>
@endsection
