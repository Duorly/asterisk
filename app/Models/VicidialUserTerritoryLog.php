<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUserTerritoryLog
 * 
 * @property string|null $user
 * @property string|null $campaign_id
 * @property Carbon|null $event_date
 * @property string|null $agent_territories
 *
 * @package App\Models
 */
class VicidialUserTerritoryLog extends Model
{
	protected $table = 'vicidial_user_territory_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'user',
		'campaign_id',
		'event_date',
		'agent_territories'
	];
}
