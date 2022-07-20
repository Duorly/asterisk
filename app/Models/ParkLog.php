<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkLog
 * 
 * @property string|null $uniqueid
 * @property string|null $status
 * @property string|null $channel
 * @property string|null $channel_group
 * @property string|null $server_ip
 * @property Carbon|null $parked_time
 * @property Carbon|null $grab_time
 * @property Carbon|null $hangup_time
 * @property int|null $parked_sec
 * @property int|null $talked_sec
 * @property string|null $extension
 * @property string|null $user
 * @property int|null $lead_id
 * @property string|null $campaign_id
 *
 * @package App\Models
 */
class ParkLog extends Model
{
	protected $table = 'park_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'parked_sec' => 'int',
		'talked_sec' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'parked_time',
		'grab_time',
		'hangup_time'
	];

	protected $fillable = [
		'uniqueid',
		'status',
		'channel',
		'channel_group',
		'server_ip',
		'parked_time',
		'grab_time',
		'hangup_time',
		'parked_sec',
		'talked_sec',
		'extension',
		'user',
		'lead_id',
		'campaign_id'
	];
}
