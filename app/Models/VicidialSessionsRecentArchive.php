<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSessionsRecentArchive
 * 
 * @property int|null $lead_id
 * @property string $server_ip
 * @property Carbon|null $call_date
 * @property string|null $user
 * @property string|null $campaign_id
 * @property string|null $conf_exten
 * @property string|null $call_type
 *
 * @package App\Models
 */
class VicidialSessionsRecentArchive extends Model
{
	protected $table = 'vicidial_sessions_recent_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'server_ip',
		'call_date',
		'user',
		'campaign_id',
		'conf_exten',
		'call_type'
	];
}
