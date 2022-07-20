<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentFunctionLogArchive
 * 
 * @property int $agent_function_log_id
 * @property int|null $agent_log_id
 * @property string|null $user
 * @property string|null $function
 * @property Carbon|null $event_time
 * @property int|null $lead_id
 * @property string|null $campaign_id
 * @property string|null $user_group
 * @property string|null $caller_code
 * @property string|null $comments
 * @property string|null $stage
 * @property string|null $uniqueid
 *
 * @package App\Models
 */
class VicidialAgentFunctionLogArchive extends Model
{
	protected $table = 'vicidial_agent_function_log_archive';
	protected $primaryKey = 'agent_function_log_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'agent_function_log_id' => 'int',
		'agent_log_id' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'event_time'
	];

	protected $fillable = [
		'agent_log_id',
		'user',
		'function',
		'event_time',
		'lead_id',
		'campaign_id',
		'user_group',
		'caller_code',
		'comments',
		'stage',
		'uniqueid'
	];
}
