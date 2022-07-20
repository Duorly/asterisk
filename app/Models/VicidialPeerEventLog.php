<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialPeerEventLog
 * 
 * @property int $peer_event_id
 * @property string|null $event_type
 * @property Carbon $event_date
 * @property string|null $channel
 * @property string $server_ip
 * @property string|null $host_ip
 * @property int|null $port
 * @property string|null $channel_type
 * @property string|null $peer
 * @property string|null $data
 *
 * @package App\Models
 */
class VicidialPeerEventLog extends Model
{
	protected $table = 'vicidial_peer_event_log';
	protected $primaryKey = 'peer_event_id';
	public $timestamps = false;

	protected $casts = [
		'port' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'event_type',
		'event_date',
		'channel',
		'server_ip',
		'host_ip',
		'port',
		'channel_type',
		'peer',
		'data'
	];
}
