<?php



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

  Route::get('/',array('as'=>'home','uses'=>'QuestionController@index'));

  Route::resource('question','QuestionController');
Route::resource('comment','CommentController');