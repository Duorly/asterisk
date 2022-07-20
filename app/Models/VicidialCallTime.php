<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCallTime
 * 
 * @property string $call_time_id
 * @property string $call_time_name
 * @property string|null $call_time_comments
 * @property int $ct_default_start
 * @property int $ct_default_stop
 * @property int|null $ct_sunday_start
 * @property int|null $ct_sunday_stop
 * @property int|null $ct_monday_start
 * @property int|null $ct_monday_stop
 * @property int|null $ct_tuesday_start
 * @property int|null $ct_tuesday_stop
 * @property int|null $ct_wednesday_start
 * @property int|null $ct_wednesday_stop
 * @property int|null $ct_thursday_start
 * @property int|null $ct_thursday_stop
 * @property int|null $ct_friday_start
 * @property int|null $ct_friday_stop
 * @property int|null $ct_saturday_start
 * @property int|null $ct_saturday_stop
 * @property string|null $ct_state_call_times
 * @property string|null $default_afterhours_filename_override
 * @property string|null $sunday_afterhours_filename_override
 * @property string|null $monday_afterhours_filename_override
 * @property string|null $tuesday_afterhours_filename_override
 * @property string|null $wednesday_afterhours_filename_override
 * @property string|null $thursday_afterhours_filename_override
 * @property string|null $friday_afterhours_filename_override
 * @property string|null $saturday_afterhours_filename_override
 * @property string|null $user_group
 * @property string|null $ct_holidays
 *
 * @package App\Models
 */
class VicidialCallTime extends Model
{
	protected $table = 'vicidial_call_times';
	protected $primaryKey = 'call_time_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ct_default_start' => 'int',
		'ct_default_stop' => 'int',
		'ct_sunday_start' => 'int',
		'ct_sunday_stop' => 'int',
		'ct_monday_start' => 'int',
		'ct_monday_stop' => 'int',
		'ct_tuesday_start' => 'int',
		'ct_tuesday_stop' => 'int',
		'ct_wednesday_start' => 'int',
		'ct_wednesday_stop' => 'int',
		'ct_thursday_start' => 'int',
		'ct_thursday_stop' => 'int',
		'ct_friday_start' => 'int',
		'ct_friday_stop' => 'int',
		'ct_saturday_start' => 'int',
		'ct_saturday_stop' => 'int'
	];

	protected $fillable = [
		'call_time_name',
		'call_time_comments',
		'ct_default_start',
		'ct_default_stop',
		'ct_sunday_start',
		'ct_sunday_stop',
		'ct_monday_start',
		'ct_monday_stop',
		'ct_tuesday_start',
		'ct_tuesday_stop',
		'ct_wednesday_start',
		'ct_wednesday_stop',
		'ct_thursday_start',
		'ct_thursday_stop',
		'ct_friday_start',
		'ct_friday_stop',
		'ct_saturday_start',
		'ct_saturday_stop',
		'ct_state_call_times',
		'default_afterhours_filename_override',
		'sunday_afterhours_filename_override',
		'monday_afterhours_filename_override',
		'tuesday_afterhours_filename_override',
		'wednesday_afterhours_filename_override',
		'thursday_afterhours_filename_override',
		'friday_afterhours_filename_override',
		'saturday_afterhours_filename_override',
		'user_group',
		'ct_holidays'
	];
}
