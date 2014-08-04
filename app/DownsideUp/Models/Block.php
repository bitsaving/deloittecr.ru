<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property integer $section_id
 * @property string  $block
 * @property string  $block_name
 * @property string  $content
 * @property string  $updated_at
 * @property string  $created_at
 * @property Image   $images
 *
 * @method static Block find()
 */
class Block extends Eloquent
{

	protected $table = 'blocks';
	protected $fillable = ['section_id', 'block', 'block_name', 'content'];

	public function section()
	{
		return $this->belongsTo(Section::class);
	}

	/**
	 * @return Image
	 */
	public function images()
	{
		return $this->hasMany(Image::class);
	}

	public function saveBlock($data, $sectionId)
	{
		$this->block = $data['block'];
		$this->block_name = $data['blockName'];
		$this->content = $data['blockContent'];
		$this->section_id = $sectionId;
		$this->save();
	}
}