<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentLog
 * 
 * @property int $agent_log_id
 * @property string|null $user
 * @property string $server_ip
 * @property Carbon|null $event_time
 * @property int|null $lead_id
 * @property string|null $campaign_id
 * @property int|null $pause_epoch
 * @property int|null $pause_sec
 * @property int|null $wait_epoch
 * @property int|null $wait_sec
 * @property int|null $talk_epoch
 * @property int|null $talk_sec
 * @property int|null $dispo_epoch
 * @property int|null $dispo_sec
 * @property string|null $status
 * @property string|null $user_group
 * @property string|null $comments
 * @property string|null $sub_status
 * @property int|null $dead_epoch
 * @property int|null $dead_sec
 * @property string|null $processed
 * @property string|null $uniqueid
 * @property string|null $pause_type
 *
 * @package App\Models
 */
class VicidialAgentLog extends Model
{
	protected $table = 'vicidial_agent_log';
	protected $primaryKey = 'agent_log_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'pause_epoch' => 'int',
		'pause_sec' => 'int',
		'wait_epoch' => 'int',
		'wait_sec' => 'int',
		'talk_epoch' => 'int',
		'talk_sec' => 'int',
		'dispo_epoch' => 'int',
		'dispo_sec' => 'int',
		'dead_epoch' => 'int',
		'dead_sec' => 'int'
	];

	protected $dates = [
		'event_time'
	];

	protected $fillable = [
		'user',
		'server_ip',
		'event_time',
		'lead_id',
		'campaign_id',
		'pause_epoch',
		'pause_sec',
		'wait_epoch',
		'wait_sec',
		'talk_epoch',
		'talk_sec',
		'dispo_epoch',
		'dispo_sec',
		'status',
		'user_group',
		'comments',
		'sub_status',
		'dead_epoch',
		'dead_sec',
		'processed',
		'uniqueid',
		'pause_type'
	];
}
