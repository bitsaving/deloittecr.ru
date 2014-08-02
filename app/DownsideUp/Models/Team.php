<?php namespace DownsideUp\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $company
 * @property string  $phone
 * @property string  $contactPerson
 * @property string  $email
 * @property string  $captainName
 * @property string  $teamName
 * @property string  $crewman1
 * @property string  $crewman2
 * @property string  $crewman3
 * @property string  $crewman4
 * @property string  $crewman5
 * @property string  $crewman6
 * @property string  $aboutTeam
 * @property string  $photo
 * @property string  $updated_at
 * @property string  $created_at
 *
 * @property Payment $payments
 *
 * @method User find() static
 */
class Team extends Eloquent
{
	protected $table = 'teams';
	protected $fillable = [
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
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function saveData($data)
	{
		$this->company = $data['company'];
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
		$this->save();
	}
}