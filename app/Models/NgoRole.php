<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoRole
 * 
 * @property int $role_id
 * @property string|null $role_name
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property Collection|NgoEmployee[] $ngo_employees
 *
 * @package App\Models
 */
class NgoRole extends Model
{
	protected $table = 'ngo_roles';
	protected $primaryKey = 'role_id';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'role_name',
		'created_by',
		'updated_by'
	];

	public function ngo_employees()
	{
		return $this->hasMany(NgoEmployee::class, 'role_id');
	}
}
