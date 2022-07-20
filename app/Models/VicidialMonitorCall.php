<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialMonitorCall
 * 
 * @property int $monitor_call_id
 * @property string $server_ip
 * @property string|null $callerid
 * @property string|null $channel
 * @property string|null $context
 * @property string|null $uniqueid
 * @property Carbon|null $monitor_time
 * @property string|null $user_phone
 * @property string|null $api_log
 * @property string|null $barge_listen
 * @property string|null $prepop_id
 * @property string|null $campaigns_limit
 * @property string|null $users_list
 *
 * @package App\Models
 */
class VicidialMonitorCall extends Model
{
	protected $table = 'vicidial_monitor_calls';
	protected $primaryKey = 'monitor_call_id';
	public $timestamps = false;

	protected $dates = [
		'monitor_time'
	];

	protected $fillable = [
		'server_ip',
		'callerid',
		'channel',
		'context',
		'uniqueid',
		'monitor_time',
		'user_phone',
		'api_log',
		'barge_listen',
		'prepop_id',
		'campaigns_limit',
		'users_list'
	];
}
