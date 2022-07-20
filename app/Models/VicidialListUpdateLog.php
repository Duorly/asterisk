<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialListUpdateLog
 * 
 * @property Carbon|null $event_date
 * @property string|null $lead_id
 * @property string|null $vendor_id
 * @property string|null $phone_number
 * @property string|null $status
 * @property string|null $old_status
 * @property string|null $filename
 * @property string|null $result
 * @property int|null $result_rows
 * @property string|null $list_id
 *
 * @package App\Models
 */
class VicidialListUpdateLog extends Model
{
	protected $table = 'vicidial_list_update_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'result_rows' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'event_date',
		'lead_id',
		'vendor_id',
		'phone_number',
		'status',
		'old_status',
		'filename',
		'result',
		'result_rows',
		'list_id'
	];
}
