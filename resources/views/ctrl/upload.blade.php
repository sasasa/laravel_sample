@extends('layouts.base')

@section('title', 'ファイルアップロードの基本')


@section('main')
<form action="/ctrl/uploadfile" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name="upfile" id="upfile">
  <input type="submit" value="送信">
  <p>{{$result}}</p>
</form>
@endsection