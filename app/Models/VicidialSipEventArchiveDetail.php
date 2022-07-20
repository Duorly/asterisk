<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSipEventArchiveDetail
 * 
 * @property bool $wday
 * @property Carbon|null $start_event_date
 * @property Carbon|null $end_event_date
 * @property int|null $record_count
 *
 * @package App\Models
 */
class VicidialSipEventArchiveDetail extends Model
{
	protected $table = 'vicidial_sip_event_archive_details';
	protected $primaryKey = 'wday';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wday' => 'bool',
		'record_count' => 'int'
	];

	protected $dates = [
		'start_event_date',
		'end_event_date'
	];

	protected $fillable = [
		'start_event_date',
		'end_event_date',
		'record_count'
	];
}
