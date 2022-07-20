<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecordingLog
 * 
 * @property int $recording_id
 * @property string|null $channel
 * @property string|null $server_ip
 * @property string|null $extension
 * @property Carbon|null $start_time
 * @property int|null $start_epoch
 * @property Carbon|null $end_time
 * @property int|null $end_epoch
 * @property int|null $length_in_sec
 * @property float|null $length_in_min
 * @property string|null $filename
 * @property string|null $location
 * @property int|null $lead_id
 * @property string|null $user
 * @property string|null $vicidial_id
 *
 * @package App\Models
 */
class RecordingLog extends Model
{
	protected $table = 'recording_log';
	protected $primaryKey = 'recording_id';
	public $timestamps = false;

	protected $casts = [
		'start_epoch' => 'int',
		'end_epoch' => 'int',
		'length_in_sec' => 'int',
		'length_in_min' => 'float',
		'lead_id' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'channel',
		'server_ip',
		'extension',
		'start_time',
		'start_epoch',
		'end_time',
		'end_epoch',
		'length_in_sec',
		'length_in_min',
		'filename',
		'location',
		'lead_id',
		'user',
		'vicidial_id'
	];
}
