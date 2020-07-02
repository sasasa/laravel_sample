<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SaveController extends Controller
{
    public function create()
    {
        return view('save.create');
    }
    public function store(Request $req)
    {
        $this->validate($req, Book::$rules);
        $book = new Book();
        $book->fill($req->all())->save();
        return redirect('hello/list');
    }

    public function edit(int $id)
    {
        return view('save.edit', [
            'b' => Book::findOrFail($id)
        ]);
    }
    public function update(Request $req, int $id)
    {
        $this->validate($req, Book::$rules);
        $b = Book::find($id);
        $b->fill($req->all())->save();
        return redirect('hello/list');
    }
    public function show(int $id)
    {
        return view('save.show', [
            'b' => Book::findOrFail($id)
        ]);
    }
    public function destroy($id)
    {
        $b = Book::findOrFail($id);
        $b->delete();
        return redirect('hello/list');
    }
}
