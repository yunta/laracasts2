@extends('layouts.helloapp')

@section('title','Delete')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
  <table>
    <form method="POST" action="/hello/del"></form>
  </table>
@endsection

@section('footer')
copyright 2018 yun
@endsection