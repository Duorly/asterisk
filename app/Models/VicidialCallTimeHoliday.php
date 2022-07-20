<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCallTimeHoliday
 * 
 * @property string $holiday_id
 * @property string $holiday_name
 * @property string|null $holiday_comments
 * @property Carbon|null $holiday_date
 * @property string|null $holiday_status
 * @property int $ct_default_start
 * @property int $ct_default_stop
 * @property string|null $default_afterhours_filename_override
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialCallTimeHoliday extends Model
{
	protected $table = 'vicidial_call_time_holidays';
	protected $primaryKey = 'holiday_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ct_default_start' => 'int',
		'ct_default_stop' => 'int'
	];

	protected $dates = [
		'holiday_date'
	];

	protected $fillable = [
		'holiday_name',
		'holiday_comments',
		'holiday_date',
		'holiday_status',
		'ct_default_start',
		'ct_default_stop',
		'default_afterhours_filename_override',
		'user_group'
	];
}
