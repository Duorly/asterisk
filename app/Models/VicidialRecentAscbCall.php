<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialRecentAscbCall
 * 
 * @property Carbon|null $call_date
 * @property Carbon|null $callback_date
 * @property int|null $callback_id
 * @property string|null $caller_code
 * @property int|null $lead_id
 * @property string $server_ip
 * @property string|null $orig_status
 * @property string|null $reschedule
 * @property int|null $list_id
 * @property string|null $rescheduled
 *
 * @package App\Models
 */
class VicidialRecentAscbCall extends Model
{
	protected $table = 'vicidial_recent_ascb_calls';
	protected $primaryKey = 'caller_code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'callback_id' => 'int',
		'lead_id' => 'int',
		'list_id' => 'int'
	];

	protected $dates = [
		'call_date',
		'callback_date'
	];

	protected $fillable = [
		'call_date',
		'callback_date',
		'callback_id',
		'lead_id',
		'server_ip',
		'orig_status',
		'reschedule',
		'list_id',
		'rescheduled'
	];
}
