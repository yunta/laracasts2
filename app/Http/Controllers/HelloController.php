<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
      public function index(Request $request)
      {
        $items = DB::table('people')->orderBy('Field4', 'asc')->get();
        return view('hello.index',['items' => $items]);
      }

      public function post(Request $request)
      {
        $validate_rule = [
          'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = new Response(view('hello.index', ['msg'=>'「' . $msg . '」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);
        return $response;
      }

      public function add(Request $request)
      {
        return view('hello.add');
      }

      public function create(Request $request)
      {
        $param = [
          'name' => $request->name,
          'mail' => $request->mail,
          'Field4' => $request->Field4
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
      }

      public function edit(Request $request)
      {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);
      }

      public function update(Request $request)
      {
        $param = [
          'name' => $request->name,
          'mail' => $request->mail,
          'Field4' => $request->age,
        ];
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
      }

      public function show(Request $request)
      {
        $name = $request->name;
        $item = DB::table('people')
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('mail', 'like', '%' . $name . '%')
            ->get();
        return view('hello.show', ['items' => $item]);
      }

      public function del(Request $request)
      {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
      }

      public function remove(Request $request)
      {
        DB::table('people')
            ->where('id', $request->id)->delete();
        return redirect('/hello');

      }

}


// addとcreateとedit,update,del,removeメソッド
