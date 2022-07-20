<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignHourCount
 * 
 * @property string|null $campaign_id
 * @property Carbon|null $date_hour
 * @property Carbon|null $next_hour
 * @property Carbon|null $last_update
 * @property string|null $type
 * @property int|null $calls
 * @property int|null $hr
 *
 * @package App\Models
 */
class VicidialCampaignHourCount extends Model
{
	protected $table = 'vicidial_campaign_hour_counts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'calls' => 'int',
		'hr' => 'int'
	];

	protected $dates = [
		'date_hour',
		'next_hour',
		'last_update'
	];

	protected $fillable = [
		'next_hour',
		'last_update',
		'calls',
		'hr'
	];
}
