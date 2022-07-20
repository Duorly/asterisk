<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSharedLog
 * 
 * @property string $campaign_id
 * @property string $server_ip
 * @property Carbon|null $log_time
 * @property int|null $total_agents
 * @property int|null $total_calls
 * @property string|null $debug_output
 * @property string|null $adapt_output
 *
 * @package App\Models
 */
class VicidialSharedLog extends Model
{
	protected $table = 'vicidial_shared_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'total_agents' => 'int',
		'total_calls' => 'int'
	];

	protected $dates = [
		'log_time'
	];

	protected $fillable = [
		'campaign_id',
		'server_ip',
		'log_time',
		'total_agents',
		'total_calls',
		'debug_output',
		'adapt_output'
	];
}
