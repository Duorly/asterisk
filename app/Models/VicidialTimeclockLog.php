<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTimeclockLog
 * 
 * @property int $timeclock_id
 * @property int $event_epoch
 * @property Carbon $event_date
 * @property int|null $login_sec
 * @property string $event
 * @property string $user
 * @property string $user_group
 * @property string|null $ip_address
 * @property string|null $shift_id
 * @property string|null $notes
 * @property string|null $manager_user
 * @property string|null $manager_ip
 * @property Carbon $event_datestamp
 * @property int|null $tcid_link
 *
 * @package App\Models
 */
class VicidialTimeclockLog extends Model
{
	protected $table = 'vicidial_timeclock_log';
	protected $primaryKey = 'timeclock_id';
	public $timestamps = false;

	protected $casts = [
		'event_epoch' => 'int',
		'login_sec' => 'int',
		'tcid_link' => 'int'
	];

	protected $dates = [
		'event_date',
		'event_datestamp'
	];

	protected $fillable = [
		'event_epoch',
		'event_date',
		'login_sec',
		'event',
		'user',
		'user_group',
		'ip_address',
		'shift_id',
		'notes',
		'manager_user',
		'manager_ip',
		'event_datestamp',
		'tcid_link'
	];
}
