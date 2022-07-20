<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkedChannel
 * 
 * @property string $channel
 * @property string $server_ip
 * @property string|null $channel_group
 * @property string|null $extension
 * @property string|null $parked_by
 * @property Carbon|null $parked_time
 *
 * @package App\Models
 */
class ParkedChannel extends Model
{
	protected $table = 'parked_channels';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'parked_time'
	];

	protected $fillable = [
		'channel',
		'server_ip',
		'channel_group',
		'extension',
		'parked_by',
		'parked_time'
	];
}
