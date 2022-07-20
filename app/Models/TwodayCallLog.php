<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TwodayCallLog
 * 
 * @property string $uniqueid
 * @property string|null $channel
 * @property string|null $channel_group
 * @property string|null $type
 * @property string|null $server_ip
 * @property string|null $extension
 * @property string|null $number_dialed
 * @property string|null $caller_code
 * @property Carbon|null $start_time
 * @property int|null $start_epoch
 * @property Carbon|null $end_time
 * @property int|null $end_epoch
 * @property int|null $length_in_sec
 * @property float|null $length_in_min
 *
 * @package App\Models
 */
class TwodayCallLog extends Model
{
	protected $table = 'twoday_call_log';
	protected $primaryKey = 'uniqueid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'start_epoch' => 'int',
		'end_epoch' => 'int',
		'length_in_sec' => 'int',
		'length_in_min' => 'float'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'channel',
		'channel_group',
		'type',
		'server_ip',
		'extension',
		'number_dialed',
		'caller_code',
		'start_time',
		'start_epoch',
		'end_time',
		'end_epoch',
		'length_in_sec',
		'length_in_min'
	];
}
