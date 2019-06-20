<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        //$pages = DB::table('pages')->get();

        $pages = Page::orderBy('updated_at', 'desc')->get();

        return view('welcome', ['pages' => $pages]);
    }
    public function show($id)
    {
        $page = Page::find($id);

        return view('show', ['page' => $page]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

            $page = new Page();
            $page->title = $request['title'];
            $page->body = $request['head'];
            $page->fulltext = $request['text'];

            $page->save();

            return redirect('/');


    }

    public function update($id)
    {
        $page = Page::find($id);
        return view('update', ['page' => $page]);
    }

    public function updated(Request $request)
    {
        $page = Page::find($request['id']);
        //echo $page;
        $page->title = $request['title'];
        $page->body = $request['head'];
        $page->fulltext = $request['text'];

        $page->save();

        return redirect('/');

    }

    public function delete(Request $request)
    {
        $page = Page::find($request['id']);
        $page->delete();
        return redirect('/');
    }
}
