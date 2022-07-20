<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDidLogArchive
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
class VicidialDidLogArchive extends Model
{
	protected $table = 'vicidial_did_log_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'channel',
		'caller_id_number',
		'caller_id_name',
		'extension',
		'did_id',
		'did_route'
	];
}
