<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSipActionLogArchive
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
class VicidialSipActionLogArchive extends Model
{
	protected $table = 'vicidial_sip_action_log_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'phone_number',
		'user',
		'result'
	];
}
