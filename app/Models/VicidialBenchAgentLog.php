<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialBenchAgentLog
 * 
 * @property int|null $lead_id
 * @property Carbon|null $bench_date
 * @property string|null $absent_agent
 * @property string|null $bench_agent
 * @property string|null $user
 *
 * @package App\Models
 */
class VicidialBenchAgentLog extends Model
{
	protected $table = 'vicidial_bench_agent_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'bench_date'
	];

	protected $fillable = [
		'lead_id',
		'bench_date',
		'absent_agent',
		'bench_agent',
		'user'
	];
}
