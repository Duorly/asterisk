<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentSkipLog
 * 
 * @property int $user_skip_log_id
 * @property string|null $user
 * @property Carbon|null $event_date
 * @property int|null $lead_id
 * @property string|null $campaign_id
 * @property string|null $previous_status
 * @property int|null $previous_called_count
 *
 * @package App\Models
 */
class VicidialAgentSkipLog extends Model
{
	protected $table = 'vicidial_agent_skip_log';
	protected $primaryKey = 'user_skip_log_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'previous_called_count' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'user',
		'event_date',
		'lead_id',
		'campaign_id',
		'previous_status',
		'previous_called_count'
	];
}
