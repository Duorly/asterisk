<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSipEventLog1
 * 
 * @property int $sip_event_id
 * @property string $caller_code
 * @property string|null $channel
 * @property string|null $server_ip
 * @property string|null $uniqueid
 * @property string|null $sip_call_id
 * @property Carbon|null $event_date
 * @property string|null $sip_event
 *
 * @package App\Models
 */
class VicidialSipEventLog1 extends Model
{
	protected $table = 'vicidial_sip_event_log_1';
	protected $primaryKey = 'sip_event_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sip_event_id' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'caller_code',
		'channel',
		'server_ip',
		'uniqueid',
		'sip_call_id',
		'event_date',
		'sip_event'
	];
}
