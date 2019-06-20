<?php

namespace App\Http\Controllers;

use App\Page;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Page $page)
    {

        Comment::create([
            'body' => request('body'),
            'page_id' => $page->id,
        ]);

        return back();

    }
}
