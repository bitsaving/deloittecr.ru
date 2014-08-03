<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $component
 * @property string  $component_name
 * @property string  $content
 * @property string  $updated_at
 * @property string  $created_at
 * @property Section $sections
 * @property Team    $teams
 *
 * @method static Component first()
 * @method static Component whereComponent()
 */
class Component extends Eloquent
{
	protected $fillable = ['component', 'component_name', 'content'];

	/**
	 * @return Page
	 */
	public function pages()
	{
		return $this->belongsToMany(Page::class);
	}

	/**
	 * @return Team
	 */
	public function teams()
	{
		return $this->hasMany(Team::class);
	}

}