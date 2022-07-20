<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VtigerRankDatum
 * 
 * @property string $account
 * @property string $seqacct
 * @property int $last_attempt_days
 * @property int $orders
 * @property int $net_sales
 * @property int $net_sales_ly
 * @property string $percent_variance
 * @property string $imu
 * @property int $aov
 * @property int $returns
 * @property int $rank
 *
 * @package App\Models
 */
class VtigerRankDatum extends Model
{
	protected $table = 'vtiger_rank_data';
	protected $primaryKey = 'account';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'last_attempt_days' => 'int',
		'orders' => 'int',
		'net_sales' => 'int',
		'net_sales_ly' => 'int',
		'aov' => 'int',
		'returns' => 'int',
		'rank' => 'int'
	];

	protected $fillable = [
		'seqacct',
		'last_attempt_days',
		'orders',
		'net_sales',
		'net_sales_ly',
		'percent_variance',
		'imu',
		'aov',
		'returns',
		'rank'
	];
}
