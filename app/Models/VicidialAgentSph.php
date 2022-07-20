<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentSph
 * 
 * @property string $campaign_group_id
 * @property Carbon $stat_date
 * @property string $shift
 * @property string|null $role
 * @property string $user
 * @property int|null $calls
 * @property int|null $sales
 * @property int|null $login_sec
 * @property float|null $login_hours
 * @property float|null $sph
 *
 * @package App\Models
 */
class VicidialAgentSph extends Model
{
	protected $table = 'vicidial_agent_sph';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'calls' => 'int',
		'sales' => 'int',
		'login_sec' => 'int',
		'login_hours' => 'float',
		'sph' => 'float'
	];

	protected $dates = [
		'stat_date'
	];

	protected $fillable = [
		'campaign_group_id',
		'stat_date',
		'shift',
		'role',
		'user',
		'calls',
		'sales',
		'login_sec',
		'login_hours',
		'sph'
	];
}
