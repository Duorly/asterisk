<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDnccomFilterLog
 * 
 * @property int $filter_log_id
 * @property int $lead_id
 * @property int|null $list_id
 * @property Carbon|null $filter_date
 * @property string|null $new_status
 * @property string|null $old_status
 * @property string|null $phone_number
 * @property string|null $dnccom_data
 *
 * @package App\Models
 */
class VicidialDnccomFilterLog extends Model
{
	protected $table = 'vicidial_dnccom_filter_log';
	protected $primaryKey = 'filter_log_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int'
	];

	protected $dates = [
		'filter_date'
	];

	protected $fillable = [
		'lead_id',
		'list_id',
		'filter_date',
		'new_status',
		'old_status',
		'phone_number',
		'dnccom_data'
	];
}
