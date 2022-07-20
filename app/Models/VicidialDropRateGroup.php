<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDropRateGroup
 * 
 * @property string $group_id
 * @property Carbon $update_time
 * @property int|null $calls_today
 * @property int|null $answers_today
 * @property float|null $drops_today
 * @property string|null $drops_today_pct
 * @property string|null $drops_answers_today_pct
 * @property int|null $answering_machines_today
 * @property int|null $agenthandled_today
 *
 * @package App\Models
 */
class VicidialDropRateGroup extends Model
{
	protected $table = 'vicidial_drop_rate_groups';
	protected $primaryKey = 'group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'calls_today' => 'int',
		'answers_today' => 'int',
		'drops_today' => 'float',
		'answering_machines_today' => 'int',
		'agenthandled_today' => 'int'
	];

	protected $dates = [
		'update_time'
	];

	protected $fillable = [
		'update_time',
		'calls_today',
		'answers_today',
		'drops_today',
		'drops_today_pct',
		'drops_answers_today_pct',
		'answering_machines_today',
		'agenthandled_today'
	];
}
