<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class Question extends Model {



    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','question'];


 public function user () {

     return $this->belongsTo('App\User');
 }

    public function comments () {
        return $this->hasMany('App\Comment');
    }


}
