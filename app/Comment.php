<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model {



    protected $table = 'comments';

    protected $fillable = ['comment','user_id','question_id'];



    public function user () {

        return $this->belongsTo('App\User');


    }

    public function questions()
    {
        return $this->belongsTo('Question', 'question_id');
    }



}
