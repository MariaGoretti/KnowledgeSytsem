<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'users';


	protected $fillable = ['username', 'email', 'password'];

	protected $hidden = ['password', 'remember_token'];

	public function questions () {

		return $this->hasMany('App\Question');
	}

	public function user () {

		return $this->belongsTo('App\User');
	}


	public function comments () {

		return $this->belongsTo('App\Comment');
	}

	
}

