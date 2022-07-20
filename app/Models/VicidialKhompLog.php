<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialKhompLog
 * 
 * @property int $khomp_log_id
 * @property string $caller_code
 * @property int|null $lead_id
 * @property string $server_ip
 * @property string|null $khomp_header
 * @property string|null $khomp_id
 * @property string|null $khomp_id_format
 * @property string|null $sip_call_id
 * @property Carbon|null $start_date
 * @property Carbon|null $audio_date
 * @property Carbon|null $answer_date
 * @property Carbon|null $end_date
 * @property Carbon|null $analyzer_date
 * @property string|null $conclusion
 * @property string|null $pattern
 * @property string|null $action
 * @property string|null $hangup_origin
 * @property string|null $hangup_cause_recv
 * @property string|null $hangup_cause_sent
 * @property string|null $hangup_auth_time
 * @property string|null $hangup_query_time
 * @property string|null $route_auth_time
 * @property string|null $route_query_time
 * @property string|null $vici_action
 * @property string|null $vici_status
 *
 * @package App\Models
 */
class VicidialKhompLog extends Model
{
	protected $table = 'vicidial_khomp_log';
	protected $primaryKey = 'khomp_log_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'audio_date',
		'answer_date',
		'end_date',
		'analyzer_date'
	];

	protected $fillable = [
		'caller_code',
		'lead_id',
		'server_ip',
		'khomp_header',
		'khomp_id',
		'khomp_id_format',
		'sip_call_id',
		'start_date',
		'audio_date',
		'answer_date',
		'end_date',
		'analyzer_date',
		'conclusion',
		'pattern',
		'action',
		'hangup_origin',
		'hangup_cause_recv',
		'hangup_cause_sent',
		'hangup_auth_time',
		'hangup_query_time',
		'route_auth_time',
		'route_query_time',
		'vici_action',
		'vici_status'
	];
}
