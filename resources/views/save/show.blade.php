@extends('layouts.base')

@section('title', '書籍情報フォーム（詳細）')

@section('main')
<form action="/save/{{ $b->id }}" method="POST">
@csrf
@method('DELETE')
<div class="pl-2">
<span>ISBNコード：</span>
{{$b->isbn}}
</div>
<div class="pl-2">
  <span for="title">書名：</span>
  {{ $b->title }}
</div>
<div class="pl-2">
  <span for="price">価格：</span>
  {{ $b->price }}
</div>
<div class="pl-2">
  <span for="publisher">出版社：</span>
  {{ $b->publisher }}
</div>
<div class="pl-2">
  <span for="published">刊行日：</span>
  {{ $b->published }}
</div>
<div class="pl-2">
  <input type="submit" value="削除する">
</div>
</form>
@endsection