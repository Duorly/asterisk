<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialProcessLog
 * 
 * @property string $serial_id
 * @property Carbon|null $run_time
 * @property int|null $run_sec
 * @property string $server_ip
 * @property string|null $script
 * @property string|null $process
 * @property string|null $output_lines
 *
 * @package App\Models
 */
class VicidialProcessLog extends Model
{
	protected $table = 'vicidial_process_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'run_sec' => 'int'
	];

	protected $dates = [
		'run_time'
	];

	protected $fillable = [
		'serial_id',
		'run_time',
		'run_sec',
		'server_ip',
		'script',
		'process',
		'output_lines'
	];
}
