<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialVdadLog
 * 
 * @property string $caller_code
 * @property string|null $server_ip
 * @property Carbon|null $call_date
 * @property string|null $epoch_micro
 * @property Carbon $db_time
 * @property string|null $run_time
 * @property string $vdad_script
 * @property int|null $lead_id
 * @property string|null $stage
 * @property int|null $step
 *
 * @package App\Models
 */
class VicidialVdadLog extends Model
{
	protected $table = 'vicidial_vdad_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'step' => 'int'
	];

	protected $dates = [
		'call_date',
		'db_time'
	];

	protected $fillable = [
		'caller_code',
		'server_ip',
		'call_date',
		'epoch_micro',
		'db_time',
		'run_time',
		'vdad_script',
		'lead_id',
		'stage',
		'step'
	];
}
