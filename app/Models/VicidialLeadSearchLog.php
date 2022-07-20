<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLeadSearchLog
 * 
 * @property int $search_log_id
 * @property string $user
 * @property Carbon $event_date
 * @property string|null $source
 * @property string|null $search_query
 * @property int|null $results
 * @property int|null $seconds
 *
 * @package App\Models
 */
class VicidialLeadSearchLog extends Model
{
	protected $table = 'vicidial_lead_search_log';
	protected $primaryKey = 'search_log_id';
	public $timestamps = false;

	protected $casts = [
		'results' => 'int',
		'seconds' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'user',
		'event_date',
		'source',
		'search_query',
		'results',
		'seconds'
	];
}
