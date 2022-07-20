<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAgentVmmOverride
 * 
 * @property Carbon|null $call_date
 * @property string|null $caller_code
 * @property int|null $lead_id
 * @property string|null $user
 * @property string|null $vm_message
 *
 * @package App\Models
 */
class VicidialAgentVmmOverride extends Model
{
	protected $table = 'vicidial_agent_vmm_overrides';
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
		'user',
		'vm_message'
	];
}
