<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoFuntype
 * 
 * @property int $funtype_id
 * @property string|null $type_name
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property Collection|NgoFund[] $ngo_funds
 *
 * @package App\Models
 */
class NgoFuntype extends Model
{
	protected $table = 'ngo_funtype';
	protected $primaryKey = 'funtype_id';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'type_name',
		'created_by',
		'updated_by'
	];

	public function ngo_funds()
	{
		return $this->hasMany(NgoFund::class, 'fund_type');
	}
}
