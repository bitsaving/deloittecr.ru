<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer         $id
 * @property string          $role
 * @property string          $role_name
 * @property string          $updated_at
 * @property string          $created_at
 */
class Role extends Eloquent
{

	protected $table = 'roles';
	protected $fillable = ['role', 'role_name'];

	public function users()
	{
		return $this->belongsToMany(User::class);
	}
}