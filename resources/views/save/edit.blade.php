@extends('layouts.base')


@section('title', '書籍情報フォーム(編集)')

@section('main')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $err)
    <li class="text-danger">{{ $err }}</li>
  @endforeach
</ul>
@endif

<form method="POST" action="/save/{{ $b->id }}">
@csrf
@method('PATCH')
<div class="pl-2">
  <label for="isbn">ISBNコード：</label>
  <input type="text" id="isbn" name="isbn" value="{{ old('isbn', $b->isbn) }}">
</div>
<div class="pl-2">
  <label for="title">書名：</label>
  <input type="text" id="title" name="title" value="{{ old('title', $b->title) }}">
</div>
<div class="pl-2">
  <label for="price">価格：</label>
  <input type="text" id="price" name="price" value="{{ old('price', $b->price) }}">
</div>
<div class="pl-2">
  <label for="publisher">出版社：</label>
  <input type="text" id="publisher" name="publisher" value="{{ old('publisher', $b->publisher) }}">
</div>
<div class="pl-2">
  <label for="published">刊行日：</label>
  <input type="text" id="published" name="published" value="{{ old('published', $b->published) }}">
</div>
<div class="pl-2">
  <input type="submit" value="送信">
</div>
</form>
@endsection