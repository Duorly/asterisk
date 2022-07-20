<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialRemoteAgentLog
 * 
 * @property string|null $uniqueid
 * @property string|null $callerid
 * @property string|null $ra_user
 * @property string|null $user
 * @property Carbon|null $call_time
 * @property string|null $extension
 * @property int|null $lead_id
 * @property string|null $phone_number
 * @property string|null $campaign_id
 * @property string|null $processed
 * @property string|null $comment
 *
 * @package App\Models
 */
class VicidialRemoteAgentLog extends Model
{
	protected $table = 'vicidial_remote_agent_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_time'
	];

	protected $fillable = [
		'uniqueid',
		'callerid',
		'ra_user',
		'user',
		'call_time',
		'extension',
		'lead_id',
		'phone_number',
		'campaign_id',
		'processed',
		'comment'
	];
}
