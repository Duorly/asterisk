<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSipActionLog
 * 
 * @property Carbon|null $call_date
 * @property string $caller_code
 * @property int|null $lead_id
 * @property string|null $phone_number
 * @property string|null $user
 * @property string|null $result
 *
 * @package App\Models
 */
class VicidialSipActionLog extends Model
{
	protected $table = 'vicidial_sip_action_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'call_date',
		'caller_code',
		'lead_id',
		'phone_number',
		'user',
		'result'
	];
}
