<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSecurityEventLog
 * 
 * @property int $event_id
 * @property string|null $server_ip
 * @property string $event
 * @property Carbon $event_time
 * @property string $severity
 * @property string $service
 * @property string $event_version
 * @property string $account_id
 * @property string $session_id
 * @property string $local_address
 * @property int $local_port
 * @property string $remote_address
 * @property int $remote_port
 * @property string|null $module
 * @property Carbon|null $session_time
 * @property string|null $optional_one
 * @property string|null $optional_two
 * @property string|null $optional_three
 *
 * @package App\Models
 */
class VicidialSecurityEventLog extends Model
{
	protected $table = 'vicidial_security_event_log';
	protected $primaryKey = 'event_id';
	public $timestamps = false;

	protected $casts = [
		'local_port' => 'int',
		'remote_port' => 'int'
	];

	protected $dates = [
		'event_time',
		'session_time'
	];

	protected $fillable = [
		'server_ip',
		'event',
		'event_time',
		'severity',
		'service',
		'event_version',
		'account_id',
		'session_id',
		'local_address',
		'local_port',
		'remote_address',
		'remote_port',
		'module',
		'session_time',
		'optional_one',
		'optional_two',
		'optional_three'
	];
}
