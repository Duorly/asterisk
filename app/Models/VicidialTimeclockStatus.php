<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTimeclockStatus
 * 
 * @property string $user
 * @property string $user_group
 * @property int|null $event_epoch
 * @property Carbon $event_date
 * @property string|null $status
 * @property string|null $ip_address
 * @property string|null $shift_id
 *
 * @package App\Models
 */
class VicidialTimeclockStatus extends Model
{
	protected $table = 'vicidial_timeclock_status';
	protected $primaryKey = 'user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'event_epoch' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'user_group',
		'event_epoch',
		'event_date',
		'status',
		'ip_address',
		'shift_id'
	];
}
