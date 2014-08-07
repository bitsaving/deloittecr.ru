<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $team_id
 * @property string  $component_id
 * @property string  $payer
 * @property string  $payment
 * @property string  $amount
 * @property string  $updated_at
 * @property string  $created_at
 *
 * @property Team    $team
 *
 * @method static User find()
 * @method static User links()
 */
class Payment extends Eloquent
{
	protected $table = 'payments';
	protected $fillable = ['component_id', 'team_id', 'payer', 'payment', 'amount'];

	public function team()
	{
		return $this->belongsTo(Team::class);
	}

	public function component()
	{
		return $this->belongsTo(Component::class);
	}
}