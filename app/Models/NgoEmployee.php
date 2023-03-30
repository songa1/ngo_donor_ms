<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoEmployee
 * 
 * @property int $employee_id
 * @property string|null $employee_name
 * @property string|null $employee_email
 * @property string|null $employee_phone
 * @property Carbon|null $employee_dob
 * @property string|null $employee_password
 * @property int|null $ngo_id
 * @property int|null $role_id
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property Ngo|null $ngo
 * @property NgoRole|null $ngo_role
 *
 * @package App\Models
 */
class NgoEmployee extends Model
{
	protected $table = 'ngo_employees';
	protected $primaryKey = 'employee_id';

	protected $casts = [
		'employee_dob' => 'date',
		'ngo_id' => 'int',
		'role_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $hidden = [
		'employee_password'
	];

	protected $fillable = [
		'employee_name',
		'employee_email',
		'employee_phone',
		'employee_dob',
		'employee_password',
		'ngo_id',
		'role_id',
		'created_by',
		'updated_by'
	];

	public function ngo()
	{
		return $this->belongsTo(Ngo::class);
	}

	public function ngo_role()
	{
		return $this->belongsTo(NgoRole::class, 'role_id');
	}
}
