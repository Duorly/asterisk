<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUserCloserLog
 * 
 * @property string|null $user
 * @property string|null $campaign_id
 * @property Carbon|null $event_date
 * @property string|null $blended
 * @property string|null $closer_campaigns
 * @property string|null $manager_change
 *
 * @package App\Models
 */
class VicidialUserCloserLog extends Model
{
	protected $table = 'vicidial_user_closer_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'user',
		'campaign_id',
		'event_date',
		'blended',
		'closer_campaigns',
		'manager_change'
	];
}
