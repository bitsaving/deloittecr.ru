<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $page
 * @property string  $page_name
 * @property string  $updated_at
 * @property string  $created_at
 * @property Section $sections
 *
 * @method static Page wherePage()
 * @method static Page first()
 */
class Page extends Eloquent
{

	protected $table = 'pages';
	protected $fillable = ['page', 'page_name'];

	/**
	 * @return Section
	 */
	public function sections()
	{
		return $this->belongsToMany(Section::class);
	}


}