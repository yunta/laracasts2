@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
  @parent
  新規ページ
@endsection

@section('content')
  <table>
    <form method="POST" action="/hello/add">
  </table>
    </form>

@endsection

@section('footer')
copyright 2018 yun
@endsection