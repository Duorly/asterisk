<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LiveChannel
 * 
 * @property string $channel
 * @property string $server_ip
 * @property string|null $channel_group
 * @property string|null $extension
 * @property string|null $channel_data
 *
 * @package App\Models
 */
class LiveChannel extends Model
{
	protected $table = 'live_channels';
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
