<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\Task; 

// Route::get('/tasks', function () {

//   $tasks = App\Task::all();

//     return view('tasks.index',compact('tasks'));
// });



// Route::get('/tasks/{task}',function ($id) {

//     $task = App\Task::find($id);

//     return view('tasks.show',compact('task'));

// });


// 直接htmlコードをreturn する関数を用意すればそのままwebページが表示される
// Route::get('hello',function(){
//   return '<html><body><h1>Hello</h1>
//   <p>this is sample page.</p></body></html>';


// Route::get('/','PostsController@index');
// Route::get('/posts/create','PostsController@create');
// Route::get('/posts/{post}','PostsController@show');
// Route::post('/posts','PostsController@store');

// posts


// GET /posts

// GET /posts/create

// POST /posts

// GET /posts/{id}/edit

// GET /posts/{id}

// PATCH /posts/{id}

// DELETE /posts/{id}


// use Illuminate\Http\Request;

// use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post'); 











?>




<!-- Route::get('/tasks' , 'TasksController@index');

Route::get('/tasks/{task}' , 'TasksController@show');


 -->
