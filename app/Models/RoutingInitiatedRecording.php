<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoutingInitiatedRecording
 * 
 * @property int $recording_id
 * @property string|null $filename
 * @property Carbon|null $launch_time
 * @property int|null $lead_id
 * @property string|null $vicidial_id
 * @property string|null $user
 * @property bool|null $processed
 *
 * @package App\Models
 */
class RoutingInitiatedRecording extends Model
{
	protected $table = 'routing_initiated_recordings';
	protected $primaryKey = 'recording_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'recording_id' => 'int',
		'lead_id' => 'int',
		'processed' => 'bool'
	];

	protected $dates = [
		'launch_time'
	];

	protected $fillable = [
		'filename',
		'launch_time',
		'lead_id',
		'vicidial_id',
		'user',
		'processed'
	];
}
