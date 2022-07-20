<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialInboundCallbackQueue
 * 
 * @property int $icbq_id
 * @property Carbon|null $icbq_date
 * @property string|null $icbq_status
 * @property string|null $icbq_phone_number
 * @property string|null $icbq_phone_code
 * @property string|null $icbq_nextday_choice
 * @property int $lead_id
 * @property string $group_id
 * @property int|null $queue_priority
 * @property Carbon|null $call_date
 * @property float|null $gmt_offset_now
 * @property Carbon $modify_date
 *
 * @package App\Models
 */
class VicidialInboundCallbackQueue extends Model
{
	protected $table = 'vicidial_inbound_callback_queue';
	protected $primaryKey = 'icbq_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'queue_priority' => 'int',
		'gmt_offset_now' => 'float'
	];

	protected $dates = [
		'icbq_date',
		'call_date',
		'modify_date'
	];

	protected $fillable = [
		'icbq_date',
		'icbq_status',
		'icbq_phone_number',
		'icbq_phone_code',
		'icbq_nextday_choice',
		'lead_id',
		'group_id',
		'queue_priority',
		'call_date',
		'gmt_offset_now',
		'modify_date'
	];
}
