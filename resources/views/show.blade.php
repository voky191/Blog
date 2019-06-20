@extends('layout')

@section('content')
<br>
<div class="content">
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
            <p>{{$page->fulltext}}</p>
            <a href="/">Return</a>
            <br><br>
            <?php $user = Auth::user(); ?>
            @if($user['name']=='admin')
                <a href="/{{$page->id}}/update"><button class="btn btn-warning">Edit</button></a>
                <form method="POST" action="/delete" onsubmit="alert('Are you shure?')">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="{{$page->id}}"/>
                    </div>
                    <input id="submit" type="submit" class="btn btn-danger" name="submit" value="Delete"/>
                </form>
                @endif
    </div>
</div>
</div>
    <div class="comments">
        <ul class="list-group">
        @foreach($page->comments as $comment)
            <li class="list-group-item">

                <strong>
                    {{ $comment->created_at->diffForHumans() }}
                </strong>
                <br>
             {{$comment->body}}

            </li>
          @endforeach
        </ul>
    </div>
<br>
    <div class="card">
        <div class="card-body">
            <form method="post" action="/comments">
                {{csrf_field()}}
            <div class="form-group">

                <textarea class="form-control" name="body" placeholder="Your comment here..."></textarea>

            </div>
            <div class="form-group">

               <button type="submit" class="btn btn-primary">Add comment</button>

            </div>
            </form>
        </div>
    </div>
@endsection