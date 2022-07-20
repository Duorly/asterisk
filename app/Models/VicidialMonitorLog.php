<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialMonitorLog
 * 
 * @property string $server_ip
 * @property string|null $callerid
 * @property string|null $channel
 * @property string|null $context
 * @property string|null $uniqueid
 * @property Carbon|null $monitor_time
 * @property string|null $user
 * @property string|null $campaign_id
 *
 * @package App\Models
 */
class VicidialMonitorLog extends Model
{
	protected $table = 'vicidial_monitor_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'monitor_time'
	];

	protected $fillable = [
		'server_ip',
		'callerid',
		'channel',
		'context',
		'uniqueid',
		'monitor_time',
		'user',
		'campaign_id'
	];
}
