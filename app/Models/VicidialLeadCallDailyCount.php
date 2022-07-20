<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLeadCallDailyCount
 * 
 * @property int $lead_id
 * @property int|null $list_id
 * @property int|null $called_count_total
 * @property int|null $called_count_auto
 * @property int|null $called_count_manual
 * @property Carbon|null $modify_date
 *
 * @package App\Models
 */
class VicidialLeadCallDailyCount extends Model
{
	protected $table = 'vicidial_lead_call_daily_counts';
	protected $primaryKey = 'lead_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'called_count_total' => 'int',
		'called_count_auto' => 'int',
		'called_count_manual' => 'int'
	];

	protected $dates = [
		'modify_date'
	];

	protected $fillable = [
		'list_id',
		'called_count_total',
		'called_count_auto',
		'called_count_manual',
		'modify_date'
	];
}
