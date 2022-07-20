<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSessionDatum
 * 
 * @property string $session_name
 * @property string|null $user
 * @property string|null $campaign_id
 * @property string $server_ip
 * @property string|null $conf_exten
 * @property string $extension
 * @property Carbon $login_time
 * @property string|null $webphone_url
 * @property string|null $agent_login_call
 *
 * @package App\Models
 */
class VicidialSessionDatum extends Model
{
	protected $table = 'vicidial_session_data';
	protected $primaryKey = 'session_name';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'login_time'
	];

	protected $fillable = [
		'user',
		'campaign_id',
		'server_ip',
		'conf_exten',
		'extension',
		'login_time',
		'webphone_url',
		'agent_login_call'
	];
}
