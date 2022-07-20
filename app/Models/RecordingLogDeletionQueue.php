<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecordingLogDeletionQueue
 * 
 * @property int $recording_id
 * @property int|null $lead_id
 * @property string|null $filename
 * @property string|null $location
 * @property Carbon|null $date_queued
 * @property Carbon|null $date_deleted
 *
 * @package App\Models
 */
class RecordingLogDeletionQueue extends Model
{
	protected $table = 'recording_log_deletion_queue';
	protected $primaryKey = 'recording_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'recording_id' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'date_queued',
		'date_deleted'
	];

	protected $fillable = [
		'lead_id',
		'filename',
		'location',
		'date_queued',
		'date_deleted'
	];
}
