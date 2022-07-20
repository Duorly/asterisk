<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LiveSipChannel
 * 
 * @property string $channel
 * @property string $server_ip
 * @property string|null $channel_group
 * @property string|null $extension
 * @property string|null $channel_data
 *
 * @package App\Models
 */
class LiveSipChannel extends Model
{
	protected $table = 'live_sip_channels';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'channel',
		'server_ip',
		'channel_group',
		'extension',
		'channel_data'
	];
}
