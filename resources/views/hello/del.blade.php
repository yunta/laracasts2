@extends('layouts.helloapp')

@section('title','Delete')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
  <table>
    <form method="POST" action="/hello/del">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $form->id }}">
      <tr>
        <th>name: </th><td>{{ $form->name }}</td>
      </tr>
      <tr>
        <th>mail: </th><td>{{ $form->mail }}</td>
      </tr>
      <tr>
        <th>age: </th><td>{{ $form->Field4 }}</td>
      </tr>
      <tr>
        <th></th><td><input type="submit" value="send"></td>
      </tr>
    </form>
  </table>
@endsection

@section('footer')
copyright 2018 yun
@endsection