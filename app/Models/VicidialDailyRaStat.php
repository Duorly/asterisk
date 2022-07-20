<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDailyRaStat
 * 
 * @property Carbon $stats_date
 * @property string|null $stats_flag
 * @property string|null $user
 * @property Carbon $update_time
 * @property Carbon|null $closed_time
 * @property int|null $max_calls
 * @property int|null $total_calls
 *
 * @package App\Models
 */
class VicidialDailyRaStat extends Model
{
	protected $table = 'vicidial_daily_ra_stats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'max_calls' => 'int',
		'total_calls' => 'int'
	];

	protected $dates = [
		'stats_date',
		'update_time',
		'closed_time'
	];

	protected $fillable = [
		'stats_date',
		'stats_flag',
		'user',
		'update_time',
		'closed_time',
		'max_calls',
		'total_calls'
	];
}
