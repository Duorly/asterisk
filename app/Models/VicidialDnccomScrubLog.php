<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDnccomScrubLog
 * 
 * @property string|null $phone_number
 * @property Carbon $scrub_date
 * @property string|null $flag_invalid
 * @property string|null $flag_dnc
 * @property string|null $flag_projdnc
 * @property string|null $flag_litigator
 * @property string|null $full_response
 *
 * @package App\Models
 */
class VicidialDnccomScrubLog extends Model
{
	protected $table = 'vicidial_dnccom_scrub_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'scrub_date'
	];

	protected $fillable = [
		'phone_number',
		'scrub_date',
		'flag_invalid',
		'flag_dnc',
		'flag_projdnc',
		'flag_litigator',
		'full_response'
	];
}
