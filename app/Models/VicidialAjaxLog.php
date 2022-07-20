<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAjaxLog
 * 
 * @property string|null $user
 * @property Carbon $start_time
 * @property Carbon $db_time
 * @property string|null $run_time
 * @property string $php_script
 * @property string|null $action
 * @property int|null $lead_id
 * @property string|null $stage
 * @property string|null $session_name
 * @property string|null $last_sql
 *
 * @package App\Models
 */
class VicidialAjaxLog extends Model
{
	protected $table = 'vicidial_ajax_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'start_time',
		'db_time'
	];

	protected $fillable = [
		'user',
		'start_time',
		'db_time',
		'run_time',
		'php_script',
		'action',
		'lead_id',
		'stage',
		'session_name',
		'last_sql'
	];
}
