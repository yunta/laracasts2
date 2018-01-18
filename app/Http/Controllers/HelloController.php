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
        $items = DB::select('select * from people');
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

      public function update(Request $request)
      {
        $param = [
          'id' => $request->id,
          'name' => $request->name,
          'mail' => $request->mail,
          'age' => $request->age,
        ];
        DB::update('update people set name =:name, mail = :mail,age = :age where id = :id', $param);
        return redirect('/hello');
      }

}


// addとcreateとedit,update,del,removeメソッド
