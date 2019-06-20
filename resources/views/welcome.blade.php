@extends('layout')

@section('content')

            @foreach ($pages as $page)
                <br>
                <div class="post">
                    <div><a>
                            <h1>{{$page->title}}</h1>
                        </a>
                        <div>
                            <div>{{$page->updated_at->toFormattedDateString()}}</div>
                            <a>Tags: </a>
                            <a href="/categories/music">Music</a>
                            <div class="content">
                        </div>
                            <p>{{$page->body}}</p>
                        <a class="btn-primary" href="/{{$page->id}}">More...</a></div>
                    </div>
                </div>
                <hr>

            @endforeach
@endsection
