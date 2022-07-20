<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAmdLogArchive
 * 
 * @property Carbon|null $call_date
 * @property string|null $caller_code
 * @property int|null $lead_id
 * @property string|null $uniqueid
 * @property string|null $channel
 * @property string $server_ip
 * @property string|null $AMDSTATUS
 * @property string|null $AMDRESPONSE
 * @property string|null $AMDCAUSE
 * @property string|null $run_time
 * @property string|null $AMDSTATS
 *
 * @package App\Models
 */
class VicidialAmdLogArchive extends Model
{
	protected $table = 'vicidial_amd_log_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'caller_code',
		'channel',
		'server_ip',
		'AMDSTATUS',
		'AMDRESPONSE',
		'AMDCAUSE',
		'run_time',
		'AMDSTATS'
	];
}
