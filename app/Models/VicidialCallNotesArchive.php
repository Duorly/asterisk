<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCallNotesArchive
 * 
 * @property int $notesid
 * @property int $lead_id
 * @property string|null $vicidial_id
 * @property Carbon|null $call_date
 * @property string|null $order_id
 * @property Carbon|null $appointment_date
 * @property Carbon|null $appointment_time
 * @property string|null $call_notes
 *
 * @package App\Models
 */
class VicidialCallNotesArchive extends Model
{
	protected $table = 'vicidial_call_notes_archive';
	protected $primaryKey = 'notesid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'notesid' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date',
		'appointment_date',
		'appointment_time'
	];

	protected $fillable = [
		'lead_id',
		'vicidial_id',
		'call_date',
		'order_id',
		'appointment_date',
		'appointment_time',
		'call_notes'
	];
}
