<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignStatsDebug
 * 
 * @property string $campaign_id
 * @property string $server_ip
 * @property Carbon|null $entry_time
 * @property Carbon $update_time
 * @property string|null $debug_output
 * @property string|null $adapt_output
 *
 * @package App\Models
 */
class VicidialCampaignStatsDebug extends Model
{
	protected $table = 'vicidial_campaign_stats_debug';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'entry_time',
		'update_time'
	];

	protected $fillable = [
		'entry_time',
		'update_time',
		'debug_output',
		'adapt_output'
	];
}
