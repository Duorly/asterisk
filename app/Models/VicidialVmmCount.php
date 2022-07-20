<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialVmmCount
 * 
 * @property Carbon|null $call_date
 * @property int|null $lead_id
 * @property int|null $vmm_count
 * @property int|null $vmm_played
 *
 * @package App\Models
 */
class VicidialVmmCount extends Model
{
	protected $table = 'vicidial_vmm_counts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'vmm_count' => 'int',
		'vmm_played' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'vmm_count',
		'vmm_played'
	];
}
