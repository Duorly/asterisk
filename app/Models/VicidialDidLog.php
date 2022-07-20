<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDidLog
 * 
 * @property string $uniqueid
 * @property string $channel
 * @property string $server_ip
 * @property string|null $caller_id_number
 * @property string|null $caller_id_name
 * @property string|null $extension
 * @property Carbon|null $call_date
 * @property string|null $did_id
 * @property string|null $did_route
 *
 * @package App\Models
 */
class VicidialDidLog extends Model
{
	protected $table = 'vicidial_did_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'uniqueid',
		'channel',
		'server_ip',
		'caller_id_number',
		'caller_id_name',
		'extension',
		'call_date',
		'did_id',
		'did_route'
	];
}
