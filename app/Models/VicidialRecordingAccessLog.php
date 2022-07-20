<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialRecordingAccessLog
 * 
 * @property int $recording_access_log_id
 * @property int|null $recording_id
 * @property int|null $lead_id
 * @property string|null $user
 * @property Carbon|null $access_datetime
 * @property string|null $access_result
 * @property string|null $ip
 *
 * @package App\Models
 */
class VicidialRecordingAccessLog extends Model
{
	protected $table = 'vicidial_recording_access_log';
	protected $primaryKey = 'recording_access_log_id';
	public $timestamps = false;

	protected $casts = [
		'recording_id' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'access_datetime'
	];

	protected $fillable = [
		'recording_id',
		'lead_id',
		'user',
		'access_datetime',
		'access_result',
		'ip'
	];
}
