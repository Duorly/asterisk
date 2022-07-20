<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialConference
 * 
 * @property int $conf_exten
 * @property string $server_ip
 * @property string|null $extension
 * @property string|null $leave_3way
 * @property Carbon|null $leave_3way_datetime
 *
 * @package App\Models
 */
class VicidialConference extends Model
{
	protected $table = 'vicidial_conferences';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'conf_exten' => 'int'
	];

	protected $dates = [
		'leave_3way_datetime'
	];

	protected $fillable = [
		'extension',
		'leave_3way',
		'leave_3way_datetime'
	];
}
