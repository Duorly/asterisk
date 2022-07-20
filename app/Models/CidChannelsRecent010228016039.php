<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CidChannelsRecent010228016039
 * 
 * @property string $caller_id_name
 * @property string $connected_line_name
 * @property Carbon|null $call_date
 * @property string|null $channel
 * @property string|null $dest_channel
 * @property string|null $linkedid
 * @property string|null $dest_uniqueid
 * @property string|null $uniqueid
 *
 * @package App\Models
 */
class CidChannelsRecent010228016039 extends Model
{
	protected $table = 'cid_channels_recent_010228016039';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'caller_id_name',
		'connected_line_name',
		'call_date',
		'channel',
		'dest_channel',
		'linkedid',
		'dest_uniqueid',
		'uniqueid'
	];
}
