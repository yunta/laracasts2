<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// class HelloController extends Controller
// {
// global $head,$style,$body,$end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body { font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
// </style>
// EOF;

// $body = '</head><body>';
// $end = '</body></head>';

// function tag($tag,$txt){
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

class HelloController extends Controller
{
      public function index(Request $request)
      {
        return view('hello.index',['msg'=>'フォームを入力：']);
      }

      public function post(Request $request)
      {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
          ];
        $this->validate($request, $validate_rule);
        return view('hello.index',['msg'=>'正しく入力されましたー！']);
      }

}
    // public function index()
    // {
    //   $data = ['one','two','three','four','five'];
    //   return view('hello.index',['data'=>$data]);
    // }
    // public function post(Request $request)
    // {
      // $msg = $request->msg;
      // $data = ['msg'=>'こんにちは' . $msg . 'サン'];
    //   return view('hello.index',['msg'=>$request->msg]);
    // }

//   public function index(Request $request,Response $response){

//   $html = <<<EOF

// <html>
// <head>
// <title>Hello</Index/title>
// <style>

// body { font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
// </style>
// </head>

// <body>
//   <h1>Hello</h1>
//   <h3>Request</h3>
//   <pre>{$request}</pre>

//   <h3>Response</h3>
//   <pre>{$response}</pre>

// </body>
// </html>
// EOF;

//     $response->setContent($html);
//     return $response;

//     }
