<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkedChannelsRecent
 * 
 * @property string $channel
 * @property string $server_ip
 * @property string|null $channel_group
 * @property Carbon|null $park_end_time
 *
 * @package App\Models
 */
class ParkedChannelsRecent extends Model
{
	protected $table = 'parked_channels_recent';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'park_end_time'
	];

	protected $fillable = [
		'channel',
		'server_ip',
		'channel_group',
		'park_end_time'
	];
}
