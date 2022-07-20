<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialInboundSurveyLog
 * 
 * @property string $uniqueid
 * @property int $lead_id
 * @property string $campaign_id
 * @property Carbon|null $call_date
 * @property string|null $participate
 * @property string|null $played
 * @property string|null $dtmf_response
 * @property string|null $next_call_menu
 *
 * @package App\Models
 */
class VicidialInboundSurveyLog extends Model
{
	protected $table = 'vicidial_inbound_survey_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'uniqueid',
		'lead_id',
		'campaign_id',
		'call_date',
		'participate',
		'played',
		'dtmf_response',
		'next_call_menu'
	];
}
