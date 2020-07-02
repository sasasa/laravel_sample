@extends('layouts.base')

@section('title', 'リレーション hasmany')


@section('main')
  <h3>「{{ $book->title }}」のレビュー</h3>
  <ul>
    @forelse ($book->reviews as $review)
      <li>{{ $review->body }}({{ $review->name }})</li>
    @empty
      <li>レビューはありません</li>
    @endforelse
  </ul>
@endsection