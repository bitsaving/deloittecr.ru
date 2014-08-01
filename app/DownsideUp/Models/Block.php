<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $block
 * @property string  $block_name
 * @property string  $content
 * @property string  $updated_at
 * @property string  $created_at
 */
class Block extends Eloquent
{

	protected $table = 'blocks';
	protected $fillable = ['block', 'block_name', 'content'];

	public function section()
	{
		return $this->belongsTo(Section::class);
	}
}