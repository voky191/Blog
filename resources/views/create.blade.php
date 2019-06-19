@extends('layout')

@section('content')
    <br>
    <form method="POST" action="/">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Some text here..." name="title">
            <small id="emailHelp" class="form-text text-muted">Post here title to your article.</small>
        </div>
        <div class="form-group">
            <label for="head">Head text</label>
            <textarea type="text" class="form-control" id="head" aria-describedby="emailHelp" placeholder="Some text here..." name="head"></textarea>
            <small id="emailHelp" class="form-text text-muted">Post here a few sentences.</small>
        </div>
        <div class="form-group">
            <label for="text">Article text</label>
            <textarea type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Some text here..." name="text"></textarea>
            <small id="emailHelp" class="form-text text-muted">Post here your article.</small>
        </div>
        <input id="submit" type="submit" class="btn btn-primary" name="submit" value="Submit"/>
    </form>
    <div class="content">
        <a href="/">Return to main page</a>
    </div>
    <hr>
@endsection