<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSharedDrop
 * 
 * @property string|null $callerid
 * @property string $server_ip
 * @property string|null $campaign_id
 * @property string|null $status
 * @property int $lead_id
 * @property string|null $uniqueid
 * @property string|null $channel
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property Carbon|null $call_time
 * @property string|null $call_type
 * @property string|null $stage
 * @property Carbon|null $last_update_time
 * @property string|null $alt_dial
 * @property Carbon|null $drop_time
 *
 * @package App\Models
 */
class VicidialSharedDrop extends Model
{
	protected $table = 'vicidial_shared_drops';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_time',
		'last_update_time',
		'drop_time'
	];

	protected $fillable = [
		'callerid',
		'server_ip',
		'campaign_id',
		'status',
		'lead_id',
		'uniqueid',
		'channel',
		'phone_code',
		'phone_number',
		'call_time',
		'call_type',
		'stage',
		'last_update_time',
		'alt_dial',
		'drop_time'
	];
}
