<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignServerStat
 * 
 * @property string $campaign_id
 * @property string $server_ip
 * @property Carbon $update_time
 * @property int|null $local_trunk_shortage
 *
 * @package App\Models
 */
class VicidialCampaignServerStat extends Model
{
	protected $table = 'vicidial_campaign_server_stats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'local_trunk_shortage' => 'int'
	];

	protected $dates = [
		'update_time'
	];

	protected $fillable = [
		'campaign_id',
		'server_ip',
		'update_time',
		'local_trunk_shortage'
	];
}
