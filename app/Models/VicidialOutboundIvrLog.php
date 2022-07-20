<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialOutboundIvrLog
 * 
 * @property string $uniqueid
 * @property string $caller_code
 * @property Carbon|null $event_date
 * @property string|null $campaign_id
 * @property int|null $lead_id
 * @property string|null $menu_id
 * @property string|null $menu_action
 *
 * @package App\Models
 */
class VicidialOutboundIvrLog extends Model
{
	protected $table = 'vicidial_outbound_ivr_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'uniqueid',
		'caller_code',
		'campaign_id',
		'menu_action'
	];
}
