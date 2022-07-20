<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAutomatedReport
 * 
 * @property string $report_id
 * @property string|null $report_name
 * @property Carbon|null $report_last_run
 * @property int|null $report_last_length
 * @property string|null $report_server
 * @property string|null $report_times
 * @property string|null $report_weekdays
 * @property string|null $report_monthdays
 * @property string|null $report_destination
 * @property string|null $email_from
 * @property string|null $email_to
 * @property string|null $email_subject
 * @property string|null $ftp_server
 * @property string|null $ftp_user
 * @property string|null $ftp_pass
 * @property string|null $ftp_directory
 * @property string|null $report_url
 * @property string|null $run_now_trigger
 * @property string|null $active
 * @property string|null $user_group
 * @property string|null $filename_override
 *
 * @package App\Models
 */
class VicidialAutomatedReport extends Model
{
	protected $table = 'vicidial_automated_reports';
	protected $primaryKey = 'report_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'report_last_length' => 'int'
	];

	protected $dates = [
		'report_last_run'
	];

	protected $fillable = [
		'report_name',
		'report_last_run',
		'report_last_length',
		'report_server',
		'report_times',
		'report_weekdays',
		'report_monthdays',
		'report_destination',
		'email_from',
		'email_to',
		'email_subject',
		'ftp_server',
		'ftp_user',
		'ftp_pass',
		'ftp_directory',
		'report_url',
		'run_now_trigger',
		'active',
		'user_group',
		'filename_override'
	];
}
