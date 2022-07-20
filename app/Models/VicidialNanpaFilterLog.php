<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialNanpaFilterLog
 * 
 * @property string $output_code
 * @property string|null $status
 * @property string|null $server_ip
 * @property string|null $list_id
 * @property Carbon|null $start_time
 * @property Carbon|null $update_time
 * @property string|null $user
 * @property int|null $leads_count
 * @property int|null $filter_count
 * @property string|null $status_line
 * @property string|null $script_output
 *
 * @package App\Models
 */
class VicidialNanpaFilterLog extends Model
{
	protected $table = 'vicidial_nanpa_filter_log';
	protected $primaryKey = 'output_code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'leads_count' => 'int',
		'filter_count' => 'int'
	];

	protected $dates = [
		'start_time',
		'update_time'
	];

	protected $fillable = [
		'status',
		'server_ip',
		'list_id',
		'start_time',
		'update_time',
		'user',
		'leads_count',
		'filter_count',
		'status_line',
		'script_output'
	];
}
