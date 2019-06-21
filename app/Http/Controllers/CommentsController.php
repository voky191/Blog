<?php

namespace App\Http\Controllers;

use App\Page;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, ['body' => 'required']);
        Comment::create([
            'body' => $request['body'],
            'page_id' => $request['page_id'],
            'user_id' => $request['user_id'],
        ]);

        $result = DB::select('SELECT DISTINCT name
                               from comments
                                join users on comments.user_id = users.id
                                where users.id ='.$request['user_id']);


        return $result;

    }
}
