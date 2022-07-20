<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDncLog
 * 
 * @property string $phone_number
 * @property string $campaign_id
 * @property string|null $action
 * @property Carbon $action_date
 * @property string|null $user
 *
 * @package App\Models
 */
class VicidialDncLog extends Model
{
	protected $table = 'vicidial_dnc_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'action_date'
	];

	protected $fillable = [
		'phone_number',
		'campaign_id',
		'action',
		'action_date',
		'user'
	];
}
