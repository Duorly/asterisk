<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LiveInboundLog
 * 
 * @property string $uniqueid
 * @property string $channel
 * @property string $server_ip
 * @property string|null $caller_id
 * @property string|null $extension
 * @property string|null $phone_ext
 * @property Carbon|null $start_time
 * @property string|null $acknowledged
 * @property string|null $inbound_number
 * @property string|null $comment_a
 * @property string|null $comment_b
 * @property string|null $comment_c
 * @property string|null $comment_d
 * @property string|null $comment_e
 *
 * @package App\Models
 */
class LiveInboundLog extends Model
{
	protected $table = 'live_inbound_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'start_time'
	];

	protected $fillable = [
		'uniqueid',
		'channel',
		'server_ip',
		'caller_id',
		'extension',
		'phone_ext',
		'start_time',
		'acknowledged',
		'inbound_number',
		'comment_a',
		'comment_b',
		'comment_c',
		'comment_d',
		'comment_e'
	];
}
