<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDtmfLog
 * 
 * @property int $dtmf_id
 * @property Carbon|null $dtmf_time
 * @property string $channel
 * @property string $server_ip
 * @property string|null $uniqueid
 * @property string|null $digit
 * @property string|null $direction
 * @property string|null $state
 *
 * @package App\Models
 */
class VicidialDtmfLog extends Model
{
	protected $table = 'vicidial_dtmf_log';
	protected $primaryKey = 'dtmf_id';
	public $timestamps = false;

	protected $dates = [
		'dtmf_time'
	];

	protected $fillable = [
		'dtmf_time',
		'channel',
		'server_ip',
		'uniqueid',
		'digit',
		'direction',
		'state'
	];
}
