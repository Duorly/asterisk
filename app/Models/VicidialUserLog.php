<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUserLog
 * 
 * @property int $user_log_id
 * @property string|null $user
 * @property string|null $event
 * @property string|null $campaign_id
 * @property Carbon|null $event_date
 * @property int|null $event_epoch
 * @property string|null $user_group
 * @property string|null $session_id
 * @property string|null $server_ip
 * @property string|null $extension
 * @property string|null $computer_ip
 * @property string|null $browser
 * @property string|null $data
 * @property string|null $phone_login
 * @property string|null $server_phone
 * @property string|null $phone_ip
 * @property int|null $webserver
 * @property int|null $login_url
 * @property int|null $browser_width
 * @property int|null $browser_height
 *
 * @package App\Models
 */
class VicidialUserLog extends Model
{
	protected $table = 'vicidial_user_log';
	protected $primaryKey = 'user_log_id';
	public $timestamps = false;

	protected $casts = [
		'event_epoch' => 'int',
		'webserver' => 'int',
		'login_url' => 'int',
		'browser_width' => 'int',
		'browser_height' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'user',
		'event',
		'campaign_id',
		'event_date',
		'event_epoch',
		'user_group',
		'session_id',
		'server_ip',
		'extension',
		'computer_ip',
		'browser',
		'data',
		'phone_login',
		'server_phone',
		'phone_ip',
		'webserver',
		'login_url',
		'browser_width',
		'browser_height'
	];
}
