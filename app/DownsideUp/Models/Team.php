<?php namespace DownsideUp\Models;

use Eloquent;
use Log;

/**
 * @property integer $id
 * @property integer $component_id
 * @property string  $company
 * @property string  $phone
 * @property string  $contactPerson
 * @property string  $email
 * @property string  $captainName
 * @property string  $teamName
 * @property string  $amount
 * @property string  $crewman1
 * @property string  $crewman2
 * @property string  $crewman3
 * @property string  $crewman4
 * @property string  $crewman5
 * @property string  $crewman6
 * @property string  $aboutTeam
 * @property string  $photo
 * @property string  $logo_img
 * @property string  $logo_url
 * @property string  $active
 * @property string  $updated_at
 * @property string  $created_at
 *
 * @property Payment $payments
 *
 * @method Team find() static
 * @method Team links() static
 * @method Team whereActive() static
 */
class Team extends Eloquent
{
	protected $table = 'teams';
	protected $fillable = [
		'component_id',
		'company',
		'phone',
		'contactPerson',
		'email',
		'captainName',
		'teamName',
		'crewman1',
		'crewman2',
		'crewman3',
		'crewman4',
		'crewman5',
		'crewman6',
		'aboutTeam',
		'photo',
		'logo_img',
		'logo_url',
		'active',
		'amount',
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function component()
	{
		return $this->belongsTo(Component::class);
	}

	public function saveNewTeam($data)
	{
		$this->company = $data['company'];
		$this->component_id = $data['component_id'];
		$this->phone = $data['phone'];
		$this->contactPerson = $data['contactPerson'];
		$this->email = $data['email'];
		$this->captainName = $data['captainName'];
		$this->teamName = $data['teamName'];
		$this->crewman1 = $data['crewman1'];
		$this->crewman2 = $data['crewman2'];
		$this->crewman3 = $data['crewman3'];
		$this->crewman4 = $data['crewman4'];
		$this->crewman5 = $data['crewman5'];
		$this->crewman6 = $data['crewman6'];
		$this->aboutTeam = $data['aboutTeam'];
		$this->photo = $data['photo'];
		$this->logo_img = $data['logo'];
		$this->active = false;
		$this->save();
	}

	public function editTeam($data)
	{
		$this->company = $data['company'];
		$this->component_id = $data['component_id'];
		$this->phone = $data['phone'];
		$this->contactPerson = $data['contactPerson'];
		$this->email = $data['email'];
		$this->captainName = $data['captainName'];
		$this->teamName = $data['teamName'];
		$this->crewman1 = $data['crewman1'];
		$this->crewman2 = $data['crewman2'];
		$this->crewman3 = $data['crewman3'];
		$this->crewman4 = $data['crewman4'];
		$this->crewman5 = $data['crewman5'];
		$this->crewman6 = $data['crewman6'];
		$this->aboutTeam = $data['aboutTeam'];
		if ($data['photo'] != null) {
			$this->photo = $data['photo'];
		}
		if ($data['logo'] != null) {
			$this->logo_img = $data['logo'];
		}
		$this->save();
	}

	public static function saveAmountToTeam($teamId)
	{
		$team = self::find($teamId);
		if ($team == null) {
			Log::info('При записи собраной суммы команда не найдена');

			return;
		}
		$teamPayments = $team->payments;
		$amount = 0;
		foreach ($teamPayments as $onePayment) {
			$amount += $onePayment->amount;
		}
		$team->amount = $amount;
		$team->save();
	}
}