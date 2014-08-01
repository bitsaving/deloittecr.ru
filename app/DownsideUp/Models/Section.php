<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $section
 * @property string  $section_name
 * @property string  $updated_at
 * @property string  $created_at
 * @property Block   $blocks
 *
 * @method static Section whereSection()
 */
class Section extends Eloquent
{

	protected $table = 'sections';
	protected $fillable = ['section', 'section_name'];

	public function pages()
	{
		return $this->belongsToMany(Page::class);
	}

	/**
	 * @return Block
	 */
	public function blocks()
	{
		return $this->hasMany(Block::class);
	}
}