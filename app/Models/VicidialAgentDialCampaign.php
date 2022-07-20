<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentDialCampaign
 * 
 * @property string|null $campaign_id
 * @property string|null $group_id
 * @property string|null $user
 * @property Carbon|null $validate_time
 * @property Carbon|null $dial_time
 *
 * @package App\Models
 */
class VicidialAgentDialCampaign extends Model
{
	protected $table = 'vicidial_agent_dial_campaigns';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'validate_time',
		'dial_time'
	];

	protected $fillable = [
		'group_id',
		'validate_time',
		'dial_time'
	];
}
