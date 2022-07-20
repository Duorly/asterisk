<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSipEventRecent
 * 
 * @property string|null $caller_code
 * @property string|null $channel
 * @property string|null $server_ip
 * @property string|null $uniqueid
 * @property Carbon|null $invite_date
 * @property Carbon|null $first_100_date
 * @property Carbon|null $first_180_date
 * @property Carbon|null $first_183_date
 * @property Carbon|null $last_100_date
 * @property Carbon|null $last_180_date
 * @property Carbon|null $last_183_date
 * @property Carbon|null $200_date
 * @property Carbon|null $error_date
 * @property string|null $processed
 *
 * @package App\Models
 */
class VicidialSipEventRecent extends Model
{
	protected $table = 'vicidial_sip_event_recent';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'invite_date',
		'first_100_date',
		'first_180_date',
		'first_183_date',
		'last_100_date',
		'last_180_date',
		'last_183_date',
		'200_date',
		'error_date'
	];

	protected $fillable = [
		'caller_code',
		'channel',
		'server_ip',
		'uniqueid',
		'invite_date',
		'first_100_date',
		'first_180_date',
		'first_183_date',
		'last_100_date',
		'last_180_date',
		'last_183_date',
		'200_date',
		'error_date',
		'processed'
	];
}
