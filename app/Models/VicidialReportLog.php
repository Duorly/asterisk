<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialReportLog
 * 
 * @property int $report_log_id
 * @property Carbon $event_date
 * @property string $user
 * @property string $ip_address
 * @property string $report_name
 * @property string|null $browser
 * @property string|null $referer
 * @property string|null $notes
 * @property string|null $url
 * @property string|null $run_time
 * @property int|null $webserver
 *
 * @package App\Models
 */
class VicidialReportLog extends Model
{
	protected $table = 'vicidial_report_log';
	protected $primaryKey = 'report_log_id';
	public $timestamps = false;

	protected $casts = [
		'webserver' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'event_date',
		'user',
		'ip_address',
		'report_name',
		'browser',
		'referer',
		'notes',
		'url',
		'run_time',
		'webserver'
	];
}
