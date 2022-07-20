<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QualityControlQueue
 * 
 * @property int $qc_log_id
 * @property string|null $qc_display_method
 * @property int|null $lead_id
 * @property string|null $status
 * @property Carbon|null $call_date
 * @property int|null $agent_log_id
 * @property string|null $user
 * @property string|null $user_group
 * @property string|null $campaign_id
 * @property string|null $group_id
 * @property int|null $list_id
 * @property string|null $scorecard_source
 * @property string|null $qc_web_form_address
 * @property string|null $vicidial_id
 * @property int|null $recording_id
 * @property string|null $qc_scorecard_id
 * @property string|null $qc_agent
 * @property string|null $qc_user_group
 * @property string|null $qc_status
 * @property Carbon $date_modified
 * @property Carbon|null $date_claimed
 * @property Carbon|null $date_completed
 *
 * @package App\Models
 */
class QualityControlQueue extends Model
{
	protected $table = 'quality_control_queue';
	protected $primaryKey = 'qc_log_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'agent_log_id' => 'int',
		'list_id' => 'int',
		'recording_id' => 'int'
	];

	protected $dates = [
		'call_date',
		'date_modified',
		'date_claimed',
		'date_completed'
	];

	protected $fillable = [
		'qc_display_method',
		'lead_id',
		'status',
		'call_date',
		'agent_log_id',
		'user',
		'user_group',
		'campaign_id',
		'group_id',
		'list_id',
		'scorecard_source',
		'qc_web_form_address',
		'vicidial_id',
		'recording_id',
		'qc_scorecard_id',
		'qc_agent',
		'qc_user_group',
		'qc_status',
		'date_modified',
		'date_claimed',
		'date_completed'
	];
}
