<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoFund
 * 
 * @property int $fund_id
 * @property int|null $fund_donor
 * @property int|null $fund_amount
 * @property int|null $ngo_id
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property int|null $fund_type
 * 
 * @property NgoDonor|null $ngo_donor
 * @property NgoFuntype|null $ngo_funtype
 * @property Ngo|null $ngo
 * @property Collection|NgoBenfun[] $ngo_benfuns
 *
 * @package App\Models
 */
class NgoFund extends Model
{
	protected $table = 'ngo_funds';
	protected $primaryKey = 'fund_id';

	protected $casts = [
		'fund_donor' => 'int',
		'fund_amount' => 'int',
		'ngo_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'fund_type' => 'int'
	];

	protected $fillable = [
		'fund_donor',
		'fund_amount',
		'ngo_id',
		'created_by',
		'updated_by',
		'fund_type'
	];

	public function ngo_donor()
	{
		return $this->belongsTo(NgoDonor::class, 'fund_donor');
	}

	public function ngo_funtype()
	{
		return $this->belongsTo(NgoFuntype::class, 'fund_type');
	}

	public function ngo()
	{
		return $this->belongsTo(Ngo::class);
	}

	public function ngo_benfuns()
	{
		return $this->hasMany(NgoBenfun::class, 'fund_id');
	}
}
