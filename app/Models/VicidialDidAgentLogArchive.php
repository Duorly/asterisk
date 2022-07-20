<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDidAgentLogArchive
 * 
 * @property string $uniqueid
 * @property string $server_ip
 * @property string|null $caller_id_number
 * @property string|null $caller_id_name
 * @property string|null $extension
 * @property Carbon|null $call_date
 * @property string|null $did_id
 * @property string|null $did_description
 * @property string|null $did_route
 * @property string|null $group_id
 * @property string|null $user
 *
 * @package App\Models
 */
class VicidialDidAgentLogArchive extends Model
{
	protected $table = 'vicidial_did_agent_log_archive';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'server_ip',
		'caller_id_number',
		'caller_id_name',
		'extension',
		'did_id',
		'did_description',
		'group_id',
		'user'
	];
}
