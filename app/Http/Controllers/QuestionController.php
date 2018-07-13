<?php namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Question;
use Illuminate\Support\Facades\Auth;
use App\Comment;
class QuestionController extends Controller {


    public function __construct(){
        $this->middleware('auth',['only'=>'create']);
    }

 public function index () {
     $question = Question::latest()->get();

     return view('home.index',compact('question'));

 }
    
    
  public function create () {

      return view('home.create');
  }


  public function store (StoreQuestionRequest $request) {
      $question = new Question($request->all());

      Auth::user()->questions()->save($question);

      return redirect('/');




  }

  public function show ($id) {

      $question = Question::with('comments')->where('id','=',$id)->first();
      return view('home.show',compact('question'));


  }  

}
