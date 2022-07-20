<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialGrabCallLog
 * 
 * @property int $auto_call_id
 * @property string|null $user
 * @property Carbon|null $event_date
 * @property Carbon|null $call_time
 * @property string|null $campaign_id
 * @property string|null $uniqueid
 * @property string|null $phone_number
 * @property int|null $lead_id
 * @property int|null $queue_priority
 * @property string|null $call_type
 *
 * @package App\Models
 */
class VicidialGrabCallLog extends Model
{
	protected $table = 'vicidial_grab_call_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'auto_call_id' => 'int',
		'lead_id' => 'int',
		'queue_priority' => 'int'
	];

	protected $dates = [
		'event_date',
		'call_time'
	];

	protected $fillable = [
		'auto_call_id',
		'user',
		'event_date',
		'call_time',
		'campaign_id',
		'uniqueid',
		'phone_number',
		'lead_id',
		'queue_priority',
		'call_type'
	];
}
