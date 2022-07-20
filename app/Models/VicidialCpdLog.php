<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCpdLog
 * 
 * @property int $cpd_id
 * @property string $channel
 * @property string|null $uniqueid
 * @property string|null $callerid
 * @property string $server_ip
 * @property int|null $lead_id
 * @property Carbon|null $event_date
 * @property string|null $result
 * @property string|null $status
 * @property float|null $cpd_seconds
 *
 * @package App\Models
 */
class VicidialCpdLog extends Model
{
	protected $table = 'vicidial_cpd_log';
	protected $primaryKey = 'cpd_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'cpd_seconds' => 'float'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'channel',
		'uniqueid',
		'callerid',
		'server_ip',
		'lead_id',
		'event_date',
		'result',
		'status',
		'cpd_seconds'
	];
}
