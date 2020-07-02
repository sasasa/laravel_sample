@extends('layouts.base')

@section('title', '共通レイアウトの基本')

@section('main')
  @parent
  <p>{{ $msg }}</p>
@endsection