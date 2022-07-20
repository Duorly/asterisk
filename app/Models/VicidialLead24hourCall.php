<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLead24hourCall
 * 
 * @property int $lead_id
 * @property int|null $list_id
 * @property Carbon|null $call_date
 * @property string|null $phone_number
 * @property string|null $phone_code
 * @property string|null $state
 * @property string|null $call_type
 *
 * @package App\Models
 */
class VicidialLead24hourCall extends Model
{
	protected $table = 'vicidial_lead_24hour_calls';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'list_id',
		'call_date',
		'phone_number',
		'phone_code',
		'state',
		'call_type'
	];
}
