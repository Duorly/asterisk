<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLeadCallQuotaCount
 * 
 * @property int $lead_id
 * @property int|null $list_id
 * @property Carbon|null $first_call_date
 * @property Carbon|null $last_call_date
 * @property string|null $status
 * @property int|null $called_count
 * @property int|null $session_one_calls
 * @property int|null $session_two_calls
 * @property int|null $session_three_calls
 * @property int|null $session_four_calls
 * @property int|null $session_five_calls
 * @property int|null $session_six_calls
 * @property int|null $day_one_calls
 * @property int|null $day_two_calls
 * @property int|null $day_three_calls
 * @property int|null $day_four_calls
 * @property int|null $day_five_calls
 * @property int|null $day_six_calls
 * @property int|null $day_seven_calls
 * @property int|null $session_one_today_calls
 * @property int|null $session_two_today_calls
 * @property int|null $session_three_today_calls
 * @property int|null $session_four_today_calls
 * @property int|null $session_five_today_calls
 * @property int|null $session_six_today_calls
 * @property int $rank
 * @property Carbon|null $modify_date
 *
 * @package App\Models
 */
class VicidialLeadCallQuotaCount extends Model
{
	protected $table = 'vicidial_lead_call_quota_counts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'called_count' => 'int',
		'session_one_calls' => 'int',
		'session_two_calls' => 'int',
		'session_three_calls' => 'int',
		'session_four_calls' => 'int',
		'session_five_calls' => 'int',
		'session_six_calls' => 'int',
		'day_one_calls' => 'int',
		'day_two_calls' => 'int',
		'day_three_calls' => 'int',
		'day_four_calls' => 'int',
		'day_five_calls' => 'int',
		'day_six_calls' => 'int',
		'day_seven_calls' => 'int',
		'session_one_today_calls' => 'int',
		'session_two_today_calls' => 'int',
		'session_three_today_calls' => 'int',
		'session_four_today_calls' => 'int',
		'session_five_today_calls' => 'int',
		'session_six_today_calls' => 'int',
		'rank' => 'int'
	];

	protected $dates = [
		'first_call_date',
		'last_call_date',
		'modify_date'
	];

	protected $fillable = [
		'first_call_date',
		'last_call_date',
		'status',
		'called_count',
		'session_one_calls',
		'session_two_calls',
		'session_three_calls',
		'session_four_calls',
		'session_five_calls',
		'session_six_calls',
		'day_one_calls',
		'day_two_calls',
		'day_three_calls',
		'day_four_calls',
		'day_five_calls',
		'day_six_calls',
		'day_seven_calls',
		'session_one_today_calls',
		'session_two_today_calls',
		'session_three_today_calls',
		'session_four_today_calls',
		'session_five_today_calls',
		'session_six_today_calls',
		'rank',
		'modify_date'
	];
}
