@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
  @parent
  インデックスページ<br>
@endsection

@section('content')
  <table>
    <tr>
      <th>Name</th>
      <th>Mail</th>
      <th>Age</th>
    </tr>
        @foreach($items as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->Field4}}</td>
          </tr>
        @endforeach
  </table>
@endsection

@section('footer')
  copyright 2018 yun.
@endsection


<!-- 子レイアウト -->
