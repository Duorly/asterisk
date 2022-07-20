<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialApiLogArchive
 * 
 * @property int $api_id
 * @property string $user
 * @property Carbon|null $api_date
 * @property string|null $api_script
 * @property string $function
 * @property string|null $agent_user
 * @property string|null $value
 * @property string|null $result
 * @property string|null $result_reason
 * @property string|null $source
 * @property string|null $data
 * @property string|null $run_time
 * @property int|null $webserver
 * @property int|null $api_url
 *
 * @package App\Models
 */
class VicidialApiLogArchive extends Model
{
	protected $table = 'vicidial_api_log_archive';
	protected $primaryKey = 'api_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'api_id' => 'int',
		'webserver' => 'int',
		'api_url' => 'int'
	];

	protected $dates = [
		'api_date'
	];

	protected $fillable = [
		'user',
		'api_date',
		'api_script',
		'function',
		'agent_user',
		'value',
		'result',
		'result_reason',
		'source',
		'data',
		'run_time',
		'webserver',
		'api_url'
	];
}
