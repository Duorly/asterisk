<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialInboundCallerCode
 * 
 * @property string $uniqueid
 * @property string|null $server_ip
 * @property Carbon|null $call_date
 * @property string $group_id
 * @property int|null $lead_id
 * @property string $caller_code
 * @property string $prev_caller_code
 *
 * @package App\Models
 */
class VicidialInboundCallerCode extends Model
{
	protected $table = 'vicidial_inbound_caller_codes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'server_ip',
		'call_date',
		'group_id',
		'lead_id',
		'prev_caller_code'
	];
}
