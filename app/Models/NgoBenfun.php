<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NgoBenfun
 * 
 * @property int $benfun_id
 * @property int|null $beneficiary_id
 * @property int|null $fund_id
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property NgoBeneficiary|null $ngo_beneficiary
 * @property NgoFund|null $ngo_fund
 *
 * @package App\Models
 */
class NgoBenfun extends Model
{
	protected $table = 'ngo_benfun';
	protected $primaryKey = 'benfun_id';

	protected $casts = [
		'beneficiary_id' => 'int',
		'fund_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'beneficiary_id',
		'fund_id',
		'created_by',
		'updated_by'
	];

	public function ngo_beneficiary()
	{
		return $this->belongsTo(NgoBeneficiary::class, 'beneficiary_id');
	}

	public function ngo_fund()
	{
		return $this->belongsTo(NgoFund::class, 'fund_id');
	}
}
