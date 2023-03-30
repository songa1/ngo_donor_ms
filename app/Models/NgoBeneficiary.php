<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoBeneficiary
 * 
 * @property int $beneficiary_id
 * @property string|null $beneficiary_name
 * @property Carbon|null $beneficiary_dob
 * @property string|null $beneficiary_occupation
 * @property string|null $beneficiary_phone
 * @property string|null $beneficiary_email
 * @property int|null $ngo_id
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property Ngo|null $ngo
 * @property Collection|NgoBenfun[] $ngo_benfuns
 *
 * @package App\Models
 */
class NgoBeneficiary extends Model
{
	protected $table = 'ngo_beneficiaries';
	protected $primaryKey = 'beneficiary_id';

	protected $casts = [
		'beneficiary_dob' => 'date',
		'ngo_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'beneficiary_name',
		'beneficiary_dob',
		'beneficiary_occupation',
		'beneficiary_phone',
		'beneficiary_email',
		'ngo_id',
		'created_by',
		'updated_by'
	];

	public function ngo()
	{
		return $this->belongsTo(Ngo::class);
	}

	public function ngo_benfuns()
	{
		return $this->hasMany(NgoBenfun::class, 'beneficiary_id');
	}
}
