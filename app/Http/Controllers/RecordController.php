<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class RecordController extends Controller
{
    public function find()
    {
        return Book::find(1)->title;
    }

    public function where()
    {
        $result = Book::where('publisher', '翔泳社')->get();
        // $result = [Book::where('publisher', '翔泳社')->first()];

        $result = Book::where('price', '<', 2800)->get();

        $result = Book::where('title', 'LIKE', '%Java%')->get();

        $result = Book::whereIn('publisher', ['日経BP', '翔泳社', 'インプレス' ])->get();

        $result = Book::whereBetween('price', [2800, 3500])->get();

        $result = Book::whereNull('publisher')->get();

        $result = Book::whereYear('published', '<', 2019)->get();

        $result = Book::where('publisher', '翔泳社')->where('price', '>', 2900)->get();

        $result = Book::where('publisher', '翔泳社')->orWhere('price', '<', 2500)->get();

        $result = Book::whereRaw('publisher = ? AND price < ?', ['翔泳社', 3000])->get();

        $result = Book::orderBy('price', 'desc')->orderBy('published', 'asc')->get();

        $result = Book::orderBy('published', 'desc')->offset(2)->limit(3)->get();

        $result = Book::select('title', 'publisher')->get();

        $result = Book::groupBy('publisher')->selectRaw('publisher, AVG(price) AS price_avg')->get();

        $result = Book::groupBy('publisher')
            ->having('price_avg', '<', 2500)
            ->selectRaw('publisher, AVG(price) AS price_avg')->get();

        $max_price = Book::where('publisher', '翔泳社')->max('price');

        return view('hello.list', [
            'records' => $result,
            'max' => $max_price
        ]);
    }

    public function hasmany()
    {
        return view('record.hasmany', [
            'book' => Book::findOrFail(1)
            // 'book' => Book::findOrFail(3)
        ]);
    }
}
