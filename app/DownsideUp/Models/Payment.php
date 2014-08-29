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
 * @method static Payment find()
 * @method static Payment links()
 * @method static Payment whereTeamId()
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

	public function savePayment($data)
	{
		$this->component_id = 2;
		$this->team_id = $data['teamId'];
		$this->payer = $data['payer'];
		$this->payment = $data['payment'];
		$this->amount = $data['amount'];
		$this->save();
	}

	public static function getFundedAmount()
	{
		$fundedAmount = 0;
		$payments = self::get()->all();
		foreach ($payments as $payment) {
			$fundedAmount += $payment->amount;
		}

		return $fundedAmount;
	}

}