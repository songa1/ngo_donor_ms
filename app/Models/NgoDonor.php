<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoDonor
 * 
 * @property int $donor_id
 * @property string|null $donor_name
 * @property string|null $donor_email
 * @property string|null $donor_phone
 * @property int|null $ngo_id
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property Ngo|null $ngo
 * @property Collection|NgoFund[] $ngo_funds
 *
 * @package App\Models
 */
class NgoDonor extends Model
{
	protected $table = 'ngo_donors';
	protected $primaryKey = 'donor_id';

	protected $casts = [
		'ngo_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'donor_name',
		'donor_email',
		'donor_phone',
		'ngo_id',
		'created_by',
		'updated_by'
	];

	public function ngo()
	{
		return $this->belongsTo(Ngo::class);
	}

	public function ngo_funds()
	{
		return $this->hasMany(NgoFund::class, 'fund_donor');
	}
}
