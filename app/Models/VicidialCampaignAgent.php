<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignAgent
 * 
 * @property string|null $user
 * @property string|null $campaign_id
 * @property bool|null $campaign_rank
 * @property bool|null $campaign_weight
 * @property int|null $calls_today
 * @property string|null $group_web_vars
 * @property int|null $campaign_grade
 * @property int|null $hopper_calls_today
 * @property int|null $hopper_calls_hour
 *
 * @package App\Models
 */
class VicidialCampaignAgent extends Model
{
	protected $table = 'vicidial_campaign_agents';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'campaign_rank' => 'bool',
		'campaign_weight' => 'bool',
		'calls_today' => 'int',
		'campaign_grade' => 'int',
		'hopper_calls_today' => 'int',
		'hopper_calls_hour' => 'int'
	];

	protected $fillable = [
		'campaign_rank',
		'campaign_weight',
		'calls_today',
		'group_web_vars',
		'campaign_grade',
		'hopper_calls_today',
		'hopper_calls_hour'
	];
}
