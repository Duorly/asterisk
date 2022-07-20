<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialProcessTrigger
 * 
 * @property string $trigger_id
 * @property string|null $trigger_name
 * @property string $server_ip
 * @property Carbon|null $trigger_time
 * @property string|null $trigger_run
 * @property string|null $user
 * @property string|null $trigger_lines
 *
 * @package App\Models
 */
class VicidialProcessTrigger extends Model
{
	protected $table = 'vicidial_process_triggers';
	protected $primaryKey = 'trigger_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'trigger_time'
	];

	protected $fillable = [
		'trigger_name',
		'server_ip',
		'trigger_time',
		'trigger_run',
		'user',
		'trigger_lines'
	];
}
