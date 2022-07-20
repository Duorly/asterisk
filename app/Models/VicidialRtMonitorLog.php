<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialRtMonitorLog
 * 
 * @property string $manager_user
 * @property string $manager_server_ip
 * @property string $manager_phone
 * @property string|null $manager_ip
 * @property string|null $agent_user
 * @property string|null $agent_server_ip
 * @property string|null $agent_status
 * @property string|null $agent_session
 * @property int|null $lead_id
 * @property string|null $campaign_id
 * @property string|null $caller_code
 * @property Carbon|null $monitor_start_time
 * @property Carbon|null $monitor_end_time
 * @property int|null $monitor_sec
 * @property string|null $monitor_type
 *
 * @package App\Models
 */
class VicidialRtMonitorLog extends Model
{
	protected $table = 'vicidial_rt_monitor_log';
	protected $primaryKey = 'caller_code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'monitor_sec' => 'int'
	];

	protected $dates = [
		'monitor_start_time',
		'monitor_end_time'
	];

	protected $fillable = [
		'manager_user',
		'manager_server_ip',
		'manager_phone',
		'manager_ip',
		'agent_user',
		'agent_server_ip',
		'agent_status',
		'agent_session',
		'lead_id',
		'campaign_id',
		'monitor_start_time',
		'monitor_end_time',
		'monitor_sec',
		'monitor_type'
	];
}
