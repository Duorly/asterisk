<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CallcardLog
 * 
 * @property string $uniqueid
 * @property string|null $card_id
 * @property int|null $balance_minutes_start
 * @property Carbon|null $call_time
 * @property Carbon|null $agent_time
 * @property Carbon|null $dispo_time
 * @property string|null $agent
 * @property string|null $agent_dispo
 * @property int|null $agent_talk_sec
 * @property int|null $agent_talk_min
 * @property string|null $phone_number
 * @property string|null $inbound_did
 *
 * @package App\Models
 */
class CallcardLog extends Model
{
	protected $table = 'callcard_log';
	protected $primaryKey = 'uniqueid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'balance_minutes_start' => 'int',
		'agent_talk_sec' => 'int',
		'agent_talk_min' => 'int'
	];

	protected $dates = [
		'call_time',
		'agent_time',
		'dispo_time'
	];

	protected $fillable = [
		'card_id',
		'balance_minutes_start',
		'call_time',
		'agent_time',
		'dispo_time',
		'agent',
		'agent_dispo',
		'agent_talk_sec',
		'agent_talk_min',
		'phone_number',
		'inbound_did'
	];
}
