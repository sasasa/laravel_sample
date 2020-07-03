<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HelloController extends Controller
{
    //
    public function index()
    {
        return 'こんにちは世界！';
    }
    public function view()
    {
        return view('hello.view', [
            'msg' => 'こんにちは世界！'
        ]);
    }
    public function list()
    {
        return view('hello.list', [
            'records' => Book::orderBy('price', 'asc')->paginate(3)
        ]);
    }
}
