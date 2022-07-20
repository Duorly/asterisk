<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTimeclockAuditLog
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
 * @property Carbon $event_datestamp
 * @property int|null $tcid_link
 *
 * @package App\Models
 */
class VicidialTimeclockAuditLog extends Model
{
	protected $table = 'vicidial_timeclock_audit_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'timeclock_id' => 'int',
		'event_epoch' => 'int',
		'login_sec' => 'int',
		'tcid_link' => 'int'
	];

	protected $dates = [
		'event_date',
		'event_datestamp'
	];

	protected $fillable = [
		'timeclock_id',
		'event_epoch',
		'event_date',
		'login_sec',
		'event',
		'user',
		'user_group',
		'ip_address',
		'shift_id',
		'event_datestamp',
		'tcid_link'
	];
}
