<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLiveInboundAgent
 * 
 * @property string|null $user
 * @property string|null $group_id
 * @property bool|null $group_weight
 * @property int|null $calls_today
 * @property Carbon|null $last_call_time
 * @property Carbon|null $last_call_finish
 * @property int|null $group_grade
 * @property int|null $calls_today_filtered
 * @property Carbon|null $last_call_time_filtered
 * @property Carbon|null $last_call_finish_filtered
 *
 * @package App\Models
 */
class VicidialLiveInboundAgent extends Model
{
	protected $table = 'vicidial_live_inbound_agents';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_weight' => 'bool',
		'calls_today' => 'int',
		'group_grade' => 'int',
		'calls_today_filtered' => 'int'
	];

	protected $dates = [
		'last_call_time',
		'last_call_finish',
		'last_call_time_filtered',
		'last_call_finish_filtered'
	];

	protected $fillable = [
		'group_weight',
		'calls_today',
		'last_call_time',
		'last_call_finish',
		'group_grade',
		'calls_today_filtered',
		'last_call_time_filtered',
		'last_call_finish_filtered'
	];
}
