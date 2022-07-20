<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLogExtendedSip
 * 
 * @property Carbon|null $call_date
 * @property string $caller_code
 * @property float|null $invite_to_ring
 * @property float|null $ring_to_final
 * @property float|null $invite_to_final
 * @property int|null $last_event_code
 *
 * @package App\Models
 */
class VicidialLogExtendedSip extends Model
{
	protected $table = 'vicidial_log_extended_sip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'invite_to_ring' => 'float',
		'ring_to_final' => 'float',
		'invite_to_final' => 'float',
		'last_event_code' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'call_date',
		'caller_code',
		'invite_to_ring',
		'ring_to_final',
		'invite_to_final',
		'last_event_code'
	];
}
