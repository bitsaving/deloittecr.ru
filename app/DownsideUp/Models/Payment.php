<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer         $id
 * @property string          $team_id
 * @property string          $payment
 * @property string          $amount
 * @property string          $updated_at
 * @property string          $created_at
 *
 * @property Team            $team
 *
 * @method User find() static
 */
class Payment extends Eloquent
{
	protected $table = 'payments';
	protected $fillable = ['team_id', 'payment', 'amount'];

	public function team()
	{
		return $this->belongsTo(Team::class);
	}
}