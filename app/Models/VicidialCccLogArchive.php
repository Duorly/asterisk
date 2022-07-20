<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCccLogArchive
 * 
 * @property Carbon|null $call_date
 * @property string|null $remote_call_id
 * @property string|null $local_call_id
 * @property int|null $lead_id
 * @property string|null $uniqueid
 * @property string|null $channel
 * @property string $server_ip
 * @property int|null $list_id
 * @property string|null $container_id
 * @property int|null $remote_lead_id
 *
 * @package App\Models
 */
class VicidialCccLogArchive extends Model
{
	protected $table = 'vicidial_ccc_log_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'remote_lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'remote_call_id',
		'local_call_id',
		'channel',
		'server_ip',
		'list_id',
		'container_id',
		'remote_lead_id'
	];
}
