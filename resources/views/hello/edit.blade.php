@extends('larouts.helloapp')

@section('title', 'Edit')

@section('menubar')
  @parent
  更新ページ
@endsection

@section('content')
  <table>
    <form method="POST" action="/hello/edit"></form>
  </table>
@endsection

@section('footer')
copyroght 2018 yun
@endsection