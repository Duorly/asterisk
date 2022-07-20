<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDialLog
 * 
 * @property string $caller_code
 * @property int|null $lead_id
 * @property string|null $server_ip
 * @property Carbon|null $call_date
 * @property string|null $extension
 * @property string|null $channel
 * @property string|null $context
 * @property int|null $timeout
 * @property string|null $outbound_cid
 * @property int|null $sip_hangup_cause
 * @property string|null $sip_hangup_reason
 * @property string|null $uniqueid
 *
 * @package App\Models
 */
class VicidialDialLog extends Model
{
	protected $table = 'vicidial_dial_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'timeout' => 'int',
		'sip_hangup_cause' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'caller_code',
		'lead_id',
		'server_ip',
		'call_date',
		'extension',
		'channel',
		'context',
		'timeout',
		'outbound_cid',
		'sip_hangup_cause',
		'sip_hangup_reason',
		'uniqueid'
	];
}
