<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentVisibilityLogArchive
 * 
 * @property Carbon $db_time
 * @property int|null $event_start_epoch
 * @property int|null $event_end_epoch
 * @property string|null $user
 * @property int|null $length_in_sec
 * @property string|null $visibility
 * @property int|null $agent_log_id
 *
 * @package App\Models
 */
class VicidialAgentVisibilityLogArchive extends Model
{
	protected $table = 'vicidial_agent_visibility_log_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'event_start_epoch' => 'int',
		'event_end_epoch' => 'int',
		'length_in_sec' => 'int',
		'agent_log_id' => 'int'
	];

	protected $dates = [
		'db_time'
	];

	protected $fillable = [
		'db_time',
		'event_start_epoch',
		'length_in_sec',
		'agent_log_id'
	];
}
