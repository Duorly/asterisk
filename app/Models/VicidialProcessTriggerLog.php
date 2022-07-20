<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialProcessTriggerLog
 * 
 * @property string $trigger_id
 * @property string $server_ip
 * @property Carbon|null $trigger_time
 * @property string|null $user
 * @property string|null $trigger_lines
 * @property string|null $trigger_results
 *
 * @package App\Models
 */
class VicidialProcessTriggerLog extends Model
{
	protected $table = 'vicidial_process_trigger_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'trigger_time'
	];

	protected $fillable = [
		'trigger_id',
		'server_ip',
		'trigger_time',
		'user',
		'trigger_lines',
		'trigger_results'
	];
}
