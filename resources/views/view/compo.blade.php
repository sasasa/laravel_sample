@extends('layouts.base')

@section('title', 'コンポーネントの基本')

@section('main')
  @component('components.alert', ['type'=>'success'])
    @slot('alert_title')
      初めてのコンポーネントのヘッダ
    @endslot
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます。
  @endcomponent


  @include('components.alert', [
    'type' => 'danger',
    'alert_title' => '初めてのサブビュー',
    'slot' => 'サブビューはメインテンプレートの変数をそのまま参照できます。'
  ])
@endsection