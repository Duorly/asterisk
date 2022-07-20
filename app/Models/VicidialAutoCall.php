<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAutoCall
 * 
 * @property int $auto_call_id
 * @property string $server_ip
 * @property string|null $campaign_id
 * @property string|null $status
 * @property int $lead_id
 * @property string|null $uniqueid
 * @property string|null $callerid
 * @property string|null $channel
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property Carbon|null $call_time
 * @property string|null $call_type
 * @property string|null $stage
 * @property Carbon $last_update_time
 * @property string|null $alt_dial
 * @property int|null $queue_priority
 * @property string|null $agent_only
 * @property string|null $agent_grab
 * @property int|null $queue_position
 * @property string|null $extension
 * @property string|null $agent_grab_extension
 *
 * @package App\Models
 */
class VicidialAutoCall extends Model
{
	protected $table = 'vicidial_auto_calls';
	protected $primaryKey = 'auto_call_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'queue_priority' => 'int',
		'queue_position' => 'int'
	];

	protected $dates = [
		'call_time',
		'last_update_time'
	];

	protected $fillable = [
		'server_ip',
		'campaign_id',
		'status',
		'lead_id',
		'uniqueid',
		'callerid',
		'channel',
		'phone_code',
		'phone_number',
		'call_time',
		'call_type',
		'stage',
		'last_update_time',
		'alt_dial',
		'queue_priority',
		'agent_only',
		'agent_grab',
		'queue_position',
		'extension',
		'agent_grab_extension'
	];
}
