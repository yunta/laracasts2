@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
  @parent
  新規ページ
@endsection

@section('content')
  <table>
    <form method="POST" action="/hello/add">
      {{ csrf_field() }}
      <tr>
        <th>name: </th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>mail: </th>
        <td>
          <input type="text" name="mail">
        </td>
      </tr>
      <tr>
        <th>age: </th>
        <td>
          <input type="text" name="Field4">
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <input type="submit" value="send">
        </td>
      </tr>
  </table>
    </form>

@endsection

@section('footer')
copyright 2018 yun
@endsection