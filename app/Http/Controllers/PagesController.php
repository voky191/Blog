<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //$pages = DB::table('pages')->get();

        $pages = Page::all();

        return view('welcome', ['pages' => $pages]);
    }
    public function show($id)
    {
        $page = Page::find($id);

        return view('show', ['page' => $page]);
    }
}
