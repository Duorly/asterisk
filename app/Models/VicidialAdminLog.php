<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAdminLog
 * 
 * @property int $admin_log_id
 * @property Carbon $event_date
 * @property string $user
 * @property string $ip_address
 * @property string $event_section
 * @property string|null $event_type
 * @property string $record_id
 * @property string $event_code
 * @property string|null $event_sql
 * @property string|null $event_notes
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialAdminLog extends Model
{
	protected $table = 'vicidial_admin_log';
	protected $primaryKey = 'admin_log_id';
	public $timestamps = false;

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'event_date',
		'user',
		'ip_address',
		'event_section',
		'event_type',
		'record_id',
		'event_code',
		'event_sql',
		'event_notes',
		'user_group'
	];
}
