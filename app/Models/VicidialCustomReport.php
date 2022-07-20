<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCustomReport
 * 
 * @property int $custom_report_id
 * @property string|null $report_name
 * @property Carbon|null $date_added
 * @property string|null $user
 * @property string|null $domain
 * @property string|null $path_name
 * @property string|null $custom_variables
 * @property Carbon $date_modified
 * @property string|null $user_modify
 *
 * @package App\Models
 */
class VicidialCustomReport extends Model
{
	protected $table = 'vicidial_custom_reports';
	protected $primaryKey = 'custom_report_id';
	public $timestamps = false;

	protected $dates = [
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'report_name',
		'date_added',
		'user',
		'domain',
		'path_name',
		'custom_variables',
		'date_modified',
		'user_modify'
	];
}
