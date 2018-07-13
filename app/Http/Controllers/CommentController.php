<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreCommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller {

	public function index()
	{

		return view('home.show');
	}


	public function store (StoreCommentRequest $request) {
		$comment = new Comment($request->all());


		 /* StoreCommentRequest at attribute and user_id saved*/
	    $cc = Auth::user()->questions()->save($comment);

		return redirect('question/'.$cc->question_id);

	}
}
