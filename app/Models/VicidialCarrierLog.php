<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCarrierLog
 * 
 * @property string $uniqueid
 * @property Carbon|null $call_date
 * @property string $server_ip
 * @property int|null $lead_id
 * @property bool|null $hangup_cause
 * @property string|null $dialstatus
 * @property string|null $channel
 * @property int|null $dial_time
 * @property int|null $answered_time
 * @property int|null $sip_hangup_cause
 * @property string|null $sip_hangup_reason
 * @property string|null $caller_code
 *
 * @package App\Models
 */
class VicidialCarrierLog extends Model
{
	protected $table = 'vicidial_carrier_log';
	protected $primaryKey = 'uniqueid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'hangup_cause' => 'bool',
		'dial_time' => 'int',
		'answered_time' => 'int',
		'sip_hangup_cause' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'call_date',
		'server_ip',
		'lead_id',
		'hangup_cause',
		'dialstatus',
		'channel',
		'dial_time',
		'answered_time',
		'sip_hangup_cause',
		'sip_hangup_reason',
		'caller_code'
	];
}
