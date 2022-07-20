<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCloserLog
 * 
 * @property int $closecallid
 * @property int $lead_id
 * @property int|null $list_id
 * @property string|null $campaign_id
 * @property Carbon|null $call_date
 * @property int|null $start_epoch
 * @property int|null $end_epoch
 * @property int|null $length_in_sec
 * @property string|null $status
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property string|null $user
 * @property string|null $comments
 * @property string|null $processed
 * @property float|null $queue_seconds
 * @property string|null $user_group
 * @property int|null $xfercallid
 * @property string|null $term_reason
 * @property string $uniqueid
 * @property string|null $agent_only
 * @property int|null $queue_position
 * @property int|null $called_count
 *
 * @package App\Models
 */
class VicidialCloserLog extends Model
{
	protected $table = 'vicidial_closer_log';
	protected $primaryKey = 'closecallid';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'start_epoch' => 'int',
		'end_epoch' => 'int',
		'length_in_sec' => 'int',
		'queue_seconds' => 'float',
		'xfercallid' => 'int',
		'queue_position' => 'int',
		'called_count' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'list_id',
		'campaign_id',
		'call_date',
		'start_epoch',
		'end_epoch',
		'length_in_sec',
		'status',
		'phone_code',
		'phone_number',
		'user',
		'comments',
		'processed',
		'queue_seconds',
		'user_group',
		'xfercallid',
		'term_reason',
		'uniqueid',
		'agent_only',
		'queue_position',
		'called_count'
	];
}
