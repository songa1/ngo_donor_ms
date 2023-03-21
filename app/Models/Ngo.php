<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ngo
 * 
 * @property int $ngo_id
 * @property string|null $ngo_name
 * @property string|null $ngo_address
 * @property string|null $ngo_phone
 * @property string|null $ngo_email
 * @property string|null $ngo_url
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property Collection|NgoBeneficiary[] $ngo_beneficiaries
 * @property Collection|NgoDonor[] $ngo_donors
 * @property Collection|NgoEmployee[] $ngo_employees
 * @property Collection|NgoFund[] $ngo_funds
 *
 * @package App\Models
 */
class Ngo extends Model
{
	protected $table = 'ngo';
	protected $primaryKey = 'ngo_id';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'ngo_name',
		'ngo_address',
		'ngo_phone',
		'ngo_email',
		'ngo_url',
		'created_by',
		'updated_by'
	];

	public function ngo_beneficiaries()
	{
		return $this->hasMany(NgoBeneficiary::class);
	}

	public function ngo_donors()
	{
		return $this->hasMany(NgoDonor::class);
	}

	public function ngo_employees()
	{
		return $this->hasMany(NgoEmployee::class);
	}

	public function ngo_funds()
	{
		return $this->hasMany(NgoFund::class);
	}
}
