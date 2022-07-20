<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDailyMaxStat
 * 
 * @property Carbon $stats_date
 * @property string|null $stats_flag
 * @property string|null $stats_type
 * @property string|null $campaign_id
 * @property Carbon $update_time
 * @property Carbon|null $closed_time
 * @property int|null $max_channels
 * @property int|null $max_calls
 * @property int|null $max_inbound
 * @property int|null $max_outbound
 * @property int|null $max_agents
 * @property int|null $max_remote_agents
 * @property int|null $total_calls
 *
 * @package App\Models
 */
class VicidialDailyMaxStat extends Model
{
	protected $table = 'vicidial_daily_max_stats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'max_channels' => 'int',
		'max_calls' => 'int',
		'max_inbound' => 'int',
		'max_outbound' => 'int',
		'max_agents' => 'int',
		'max_remote_agents' => 'int',
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
		'stats_type',
		'campaign_id',
		'update_time',
		'closed_time',
		'max_channels',
		'max_calls',
		'max_inbound',
		'max_outbound',
		'max_agents',
		'max_remote_agents',
		'total_calls'
	];
}
