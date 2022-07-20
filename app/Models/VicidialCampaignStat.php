<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignStat
 * 
 * @property string $campaign_id
 * @property Carbon $update_time
 * @property int|null $dialable_leads
 * @property int|null $calls_today
 * @property int|null $answers_today
 * @property float|null $drops_today
 * @property string|null $drops_today_pct
 * @property string|null $drops_answers_today_pct
 * @property int|null $calls_hour
 * @property int|null $answers_hour
 * @property int|null $drops_hour
 * @property string|null $drops_hour_pct
 * @property int|null $calls_halfhour
 * @property int|null $answers_halfhour
 * @property int|null $drops_halfhour
 * @property string|null $drops_halfhour_pct
 * @property int|null $calls_fivemin
 * @property int|null $answers_fivemin
 * @property int|null $drops_fivemin
 * @property string|null $drops_fivemin_pct
 * @property int|null $calls_onemin
 * @property int|null $answers_onemin
 * @property int|null $drops_onemin
 * @property string|null $drops_onemin_pct
 * @property string|null $differential_onemin
 * @property string|null $agents_average_onemin
 * @property int|null $balance_trunk_fill
 * @property string|null $status_category_1
 * @property int|null $status_category_count_1
 * @property string|null $status_category_2
 * @property int|null $status_category_count_2
 * @property string|null $status_category_3
 * @property int|null $status_category_count_3
 * @property string|null $status_category_4
 * @property int|null $status_category_count_4
 * @property int|null $hold_sec_stat_one
 * @property int|null $hold_sec_stat_two
 * @property int|null $agent_non_pause_sec
 * @property int|null $hold_sec_answer_calls
 * @property int|null $hold_sec_drop_calls
 * @property int|null $hold_sec_queue_calls
 * @property int|null $agent_calls_today
 * @property int|null $agent_wait_today
 * @property int|null $agent_custtalk_today
 * @property int|null $agent_acw_today
 * @property int|null $agent_pause_today
 * @property int|null $answering_machines_today
 * @property int|null $agenthandled_today
 * @property int|null $park_calls_today
 * @property int|null $park_sec_today
 *
 * @package App\Models
 */
class VicidialCampaignStat extends Model
{
	protected $table = 'vicidial_campaign_stats';
	protected $primaryKey = 'campaign_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dialable_leads' => 'int',
		'calls_today' => 'int',
		'answers_today' => 'int',
		'drops_today' => 'float',
		'calls_hour' => 'int',
		'answers_hour' => 'int',
		'drops_hour' => 'int',
		'calls_halfhour' => 'int',
		'answers_halfhour' => 'int',
		'drops_halfhour' => 'int',
		'calls_fivemin' => 'int',
		'answers_fivemin' => 'int',
		'drops_fivemin' => 'int',
		'calls_onemin' => 'int',
		'answers_onemin' => 'int',
		'drops_onemin' => 'int',
		'balance_trunk_fill' => 'int',
		'status_category_count_1' => 'int',
		'status_category_count_2' => 'int',
		'status_category_count_3' => 'int',
		'status_category_count_4' => 'int',
		'hold_sec_stat_one' => 'int',
		'hold_sec_stat_two' => 'int',
		'agent_non_pause_sec' => 'int',
		'hold_sec_answer_calls' => 'int',
		'hold_sec_drop_calls' => 'int',
		'hold_sec_queue_calls' => 'int',
		'agent_calls_today' => 'int',
		'agent_wait_today' => 'int',
		'agent_custtalk_today' => 'int',
		'agent_acw_today' => 'int',
		'agent_pause_today' => 'int',
		'answering_machines_today' => 'int',
		'agenthandled_today' => 'int',
		'park_calls_today' => 'int',
		'park_sec_today' => 'int'
	];

	protected $dates = [
		'update_time'
	];

	protected $fillable = [
		'update_time',
		'dialable_leads',
		'calls_today',
		'answers_today',
		'drops_today',
		'drops_today_pct',
		'drops_answers_today_pct',
		'calls_hour',
		'answers_hour',
		'drops_hour',
		'drops_hour_pct',
		'calls_halfhour',
		'answers_halfhour',
		'drops_halfhour',
		'drops_halfhour_pct',
		'calls_fivemin',
		'answers_fivemin',
		'drops_fivemin',
		'drops_fivemin_pct',
		'calls_onemin',
		'answers_onemin',
		'drops_onemin',
		'drops_onemin_pct',
		'differential_onemin',
		'agents_average_onemin',
		'balance_trunk_fill',
		'status_category_1',
		'status_category_count_1',
		'status_category_2',
		'status_category_count_2',
		'status_category_3',
		'status_category_count_3',
		'status_category_4',
		'status_category_count_4',
		'hold_sec_stat_one',
		'hold_sec_stat_two',
		'agent_non_pause_sec',
		'hold_sec_answer_calls',
		'hold_sec_drop_calls',
		'hold_sec_queue_calls',
		'agent_calls_today',
		'agent_wait_today',
		'agent_custtalk_today',
		'agent_acw_today',
		'agent_pause_today',
		'answering_machines_today',
		'agenthandled_today',
		'park_calls_today',
		'park_sec_today'
	];
}
