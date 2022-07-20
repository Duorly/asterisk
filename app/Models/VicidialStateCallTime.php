<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialStateCallTime
 * 
 * @property string $state_call_time_id
 * @property string $state_call_time_state
 * @property string $state_call_time_name
 * @property string|null $state_call_time_comments
 * @property int $sct_default_start
 * @property int $sct_default_stop
 * @property int|null $sct_sunday_start
 * @property int|null $sct_sunday_stop
 * @property int|null $sct_monday_start
 * @property int|null $sct_monday_stop
 * @property int|null $sct_tuesday_start
 * @property int|null $sct_tuesday_stop
 * @property int|null $sct_wednesday_start
 * @property int|null $sct_wednesday_stop
 * @property int|null $sct_thursday_start
 * @property int|null $sct_thursday_stop
 * @property int|null $sct_friday_start
 * @property int|null $sct_friday_stop
 * @property int|null $sct_saturday_start
 * @property int|null $sct_saturday_stop
 * @property string|null $user_group
 * @property string|null $ct_holidays
 *
 * @package App\Models
 */
class VicidialStateCallTime extends Model
{
	protected $table = 'vicidial_state_call_times';
	protected $primaryKey = 'state_call_time_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sct_default_start' => 'int',
		'sct_default_stop' => 'int',
		'sct_sunday_start' => 'int',
		'sct_sunday_stop' => 'int',
		'sct_monday_start' => 'int',
		'sct_monday_stop' => 'int',
		'sct_tuesday_start' => 'int',
		'sct_tuesday_stop' => 'int',
		'sct_wednesday_start' => 'int',
		'sct_wednesday_stop' => 'int',
		'sct_thursday_start' => 'int',
		'sct_thursday_stop' => 'int',
		'sct_friday_start' => 'int',
		'sct_friday_stop' => 'int',
		'sct_saturday_start' => 'int',
		'sct_saturday_stop' => 'int'
	];

	protected $fillable = [
		'state_call_time_state',
		'state_call_time_name',
		'state_call_time_comments',
		'sct_default_start',
		'sct_default_stop',
		'sct_sunday_start',
		'sct_sunday_stop',
		'sct_monday_start',
		'sct_monday_stop',
		'sct_tuesday_start',
		'sct_tuesday_stop',
		'sct_wednesday_start',
		'sct_wednesday_stop',
		'sct_thursday_start',
		'sct_thursday_stop',
		'sct_friday_start',
		'sct_friday_stop',
		'sct_saturday_start',
		'sct_saturday_stop',
		'user_group',
		'ct_holidays'
	];
}
