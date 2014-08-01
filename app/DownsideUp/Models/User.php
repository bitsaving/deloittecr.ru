<?php namespace DownsideUp\Models;

use Eloquent;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

/**
 * @property integer         $id
 * @property string          $username
 * @property string          $email
 * @property string          $password
 * @property string          $updated_at
 * @property string          $created_at
 * @property string          $remember_token
 *
 * @property Role            $roles
 *
 * @method User find() static
 */
class User extends Eloquent implements UserInterface, RemindableInterface
{

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	protected $fillable = ['username', 'email', 'password'];

	protected $hidden = array('password', 'remember_token');

	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}

}
