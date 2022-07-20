<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUrlLog
 * 
 * @property int $url_log_id
 * @property string $uniqueid
 * @property Carbon|null $url_date
 * @property string|null $url_type
 * @property int|null $response_sec
 * @property string|null $url
 * @property string|null $url_response
 *
 * @package App\Models
 */
class VicidialUrlLog extends Model
{
	protected $table = 'vicidial_url_log';
	protected $primaryKey = 'url_log_id';
	public $timestamps = false;

	protected $casts = [
		'response_sec' => 'int'
	];

	protected $dates = [
		'url_date'
	];

	protected $fillable = [
		'uniqueid',
		'url_date',
		'url_type',
		'response_sec',
		'url',
		'url_response'
	];
}
