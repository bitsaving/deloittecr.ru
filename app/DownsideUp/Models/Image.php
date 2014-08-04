<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer   $id
 * @property integer   $block_id
 * @property string    $image
 * @property string    $image_name
 * @property string    $content
 * @property string    $updated_at
 * @property string    $created_at
 * @property Block     $block
 *
 * @method static Image whereImage()
 * @method static Image first()
 * @method static Image find()
 */
class Image extends Eloquent
{
	protected $table = 'images';
	protected $fillable = ['block_id', 'image', 'image_name', 'content'];

	public function block()
	{
		return $this->belongsTo(Block::class);
	}

	public function saveImage($data)
	{

		$this->block_id = $data['blockId'];
		$this->image = $data['image'];
		$this->image_name = isset($data['imageName']) ? $data['imageName'] : '';
		$this->content = isset($data['content']) ? $data['content'] : '';
		$this->save();
	}
}